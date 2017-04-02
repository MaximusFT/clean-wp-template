$(function(){
	// Прилипание ХЕДЕРА, только стили надо прописать, у каждого свой подход
    $(window).scroll(function() {
        if ($(this).scrollTop() > 80) {
            $('header').addClass("sticky");
            $('body').addClass("stickyBody");
        } else {
            $('header').removeClass("sticky");
            $('body').removeClass("stickyBody");
        }
    });


});
