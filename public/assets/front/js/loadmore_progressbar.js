;jQuery(function($) {
    var value = 3;
    total = $('.loadmore_parent').find('.loadmore_child').length;
    $(function() {
        var increment = 3;
        var startFilter = 0;
        var endFilter = increment;
        var $this = $('.loadmore_parent');
        var elementLength = $this.find('.loadmore_child').length;
        $('.listLength').text(elementLength);
        if (elementLength > 2) {
            $('.productLoadMoreButton').show();
        }
        $('.loadmore_parent .loadmore_child').slice(startFilter, endFilter).addClass('shown');
        (elementLength<endFilter) ? $('.shownLength').text(elementLength) : $('.shownLength').text(endFilter);
        $('.loadmore_parent .loadmore_child').not('.shown').hide();
        if (elementLength < endFilter) {
            $('.productLoadMoreButton').remove();
        }else{
            $('.productLoadMoreButton .showMore').on('click', function() {
                if (elementLength > endFilter) {
                    startFilter += increment;
                    endFilter += increment;
                    $('.loadmore_parent .loadmore_child').slice(startFilter, endFilter).not('.shown').addClass('shown').toggle(500);
                    $('.shownLength').text((endFilter > elementLength) ? elementLength : endFilter);
                    if (elementLength <= endFilter) {
                        $('.productLoadMoreButton').remove();
                    }
                    
                }else{
                    $('.productLoadMoreButton').remove();
                }
                value = endFilter;
                return value;
            });
        }
        
    });
    percentage_main = value / total * 100;
    percentage = value / total * 100;
    $(document).ready(function() {
        if(percentage<100){
        $('#jq').LineProgressbar({
            percentage: percentage_main
        });
        }else{
            $('#jq').LineProgressbar({
                percentage: 100
            });
        } 
    });
    $('.productLoadMoreButton .showMore').on('click', function() {
        if (percentage_main <= 100) {
            percentage += percentage_main;
            if(percentage<100){
                $('#jq').LineProgressbar({
                    percentage: percentage
                });
            }else{
                $('#jq').LineProgressbar({
                    percentage: 100
                });
            }  
        }
    });
});