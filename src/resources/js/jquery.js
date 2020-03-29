$(function(){
    $(".media-form-add-button").click(function(){
        let clone = $(this).parent().parent().clone(true);
        clone.insertAfter($(this).parent().parent());
        $(this).hide();
        $(this).next().hide();
        // init css (only display 'novel' at first)
        switchStoryRegisterFormParts('novel', clone);
        renameAriaDescribedByAndId(clone);
        showDelButtonOnClone(clone);
    });

    $(".media-form-del-button").click(function(){
        let delTarget = $(this).parent().parent();

        if (delTarget.parent().children().length > 1) {
            if (delTarget.parent().children().length > 2) {
                delTarget.prev().find('.media-form-del-button').show();
            }
            delTarget.prev().find('.media-form-add-button').show();
            delTarget.remove();
        }
    });

    $(".media-select").change(function() {
        let selectedValue = $(this).val();
        let targetFamily = $(this).parent().parent();
        switchStoryRegisterFormParts(selectedValue, targetFamily);
    });

    function switchStoryRegisterFormParts (value, targetFamily) {

        if (!(value || targetFamily)) {
            return;
        }

        switch (value) {
            case 'novel':
                $(targetFamily).find(".register-form-for-comic").hide();
                $(targetFamily).find(".register-form-for-anime").hide();
                $(targetFamily).find(".register-form-for-drama").hide();
                $(targetFamily).find(".register-form-for-novel").show();
                break;

            case 'comic':
                $(targetFamily).find(".register-form-for-novel").hide();
                $(targetFamily).find(".register-form-for-anime").hide();
                $(targetFamily).find(".register-form-for-drama").hide();
                $(targetFamily).find(".register-form-for-comic").show();
                break;

            case 'anime':
                $(targetFamily).find(".register-form-for-novel").hide();
                $(targetFamily).find(".register-form-for-comic").hide();
                $(targetFamily).find(".register-form-for-drama").hide();
                $(targetFamily).find(".register-form-for-anime").show();
                break;

            case 'drama':
                $(targetFamily).find(".register-form-for-novel").hide();
                $(targetFamily).find(".register-form-for-comic").hide();
                $(targetFamily).find(".register-form-for-anime").hide();
                $(targetFamily).find(".register-form-for-drama").show();
            default:
                break;
        }
    }

    function renameAriaDescribedByAndId(family) {
        console.log(family);
        $(family).find(".input-group-text").each(function(i,e) {
            let renameBaseById = $(e).attr('id');
            if (renameBaseById) {
                let cnt = parseInt(renameBaseById.slice(-1), 10) + 1;
                let newId = renameBaseById.slice(0, -1) + cnt;
                $(e).attr('id', newId);
                $(e).parent().next().attr('aria-describedby', newId);
            } else {
                renameBaseByFor = $(e).attr('for');
                let cnt = parseInt(renameBaseByFor.slice(-1), 10) + 1;
                let newFor = renameBaseByFor.slice(0, -1) + cnt;
                $(e).attr('for', newFor);
                $(e).parent().next().attr('id', newFor);
            }
        });
    }

    function showDelButtonOnClone (clone) {
        $(clone).find('.media-form-del-button').show();
    }
});
