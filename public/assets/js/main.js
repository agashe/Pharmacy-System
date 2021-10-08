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
});