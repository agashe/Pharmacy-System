/**
 * Pharmacy System
 * 
 * author: Mohamed Yousef
 * contact: engineer.mohamed.yossef@gmail.com
 * version: 1.0.0
 */

$(document).ready(function(){
    /**
     * CSRF Token
     */
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /**
     * Delete Item  
     */    
    $('.delete-button').click(function() {
        if (!confirm('Are you sure ?'))
            return;

        $('body').append(`
            <form id="delete-form" class="d-none" method="POST" action="${$(this).data('action')}">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="${$('meta[name="csrf-token"]').attr('content')}">
            </form>
        `);

        $(document).find('#delete-form').submit();
    });

    /**
     * Search Products
     */
    $('.search-results').find('ul').hide();
    $('#search-keyword').on('keyup', function(e) {
        let keyword = $(this).val();
        if (!keyword || keyword.length < 3) {
            $('.search-results').find('ul').hide();
            return;
        }

        $.ajax({
            type: 'GET',
            url: url + '/products?forAjax=1&keyword=' + keyword,
        })
        .done(function(data) {
            if (data) {
                let html = '';
                $('.search-results').find('ul').html(html);

                data.forEach(function(item) {
                    html += `
                        <li>
                            <a href="${item.url}">${item.title}</a>
                        </li>
                    `; 
                });

                $('.search-results').find('ul').append(html).show();
            }
        });
    });
});