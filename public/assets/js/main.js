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
});