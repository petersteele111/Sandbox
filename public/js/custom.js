/**
 * Created by Peter Steele on 6/29/2017.
 */

$(function() {
    $(".selectable").selectable({
        selected: function() {
            var selectedItemList = $("#selected-item-list").empty();
            $(".selectable img").each(function(index) {
                if ($(this).hasClass("ui-selected")) {
                    selectedItemList.append((index + 1) + ", ");
                }
            });
        }
    });
});
