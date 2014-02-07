  

        jQuery( document ).ready(function( $ ) {
                                 $("#bestClassesButton").click(function(){showBestClasses($(this));})
                                 $("#bestTeachersButton").click(function(){showBestTeachers($(this));})
                                 $("#easiestClassesButton").click(function(){showEasiestClasses($(this));})
                                 $("#searchButton").click(function(){createSearchQuery($(this));})
                                 $(".ddOption").click(function(){dropDownClicked($(this));})
});
      
                      
    function showBestClasses(thisObj){
        console.log("showBC");
        $('#bestClassesTable').show();
        $('#bestProfessorsTable').hide();
        $('#easiestClassesTable').hide();
        $('#bestTeachersButton').addClass('btn-primary').removeClass('btn-default-selected');
        $('#easiestClassesButton').addClass('btn-primary').removeClass('btn-default-selected');
        thisObj.addClass('btn-default-selected').removeClass('btn-primary');
        
    }
    function showBestTeachers(thisObj){
        console.log("showBT");
        $('#bestClassesTable').hide();
        $('#bestProfessorsTable').show();
        $('#easiestClassesTable').hide();
        $('#bestClassesButton').addClass('btn-primary').removeClass('btn-default-selected');
        $('#easiestClassesButton').addClass('btn-primary').removeClass('btn-default-selected');
        thisObj.addClass('btn-default-selected').removeClass('btn-primary');
    }
    function showEasiestClasses(thisObj){
        console.log("showBC");
        $('#bestClassesTable').hide();
        $('#bestProfessorsTable').hide();
        $('#easiestClassesTable').show();
        $('#bestClassesButton').addClass('btn-primary').removeClass('btn-default-selected');
        $('#bestTeachersButton').addClass('btn-primary').removeClass('btn-default-selected');
        thisObj.addClass('btn-default-selected').removeClass('btn-primary');
        thisObj.addClass('btn-default-selected').removeClass('btn-primary');
    }
    function createSearchQuery(thisObj){
        
        var url;
        console.log("creatingSearchQuery");
        query = $('#searchInputField').val();
        type = $('#dropDownButton').text();
        console.log(type);
        url = "searchResults.php?type="+type+"&query="+query;
        console.log(url);
        document.location.href=url;
    }
    function dropDownClicked(thisObj){
        
        console.log("ddOptions clicked ="+thisObj[0].innerHTML);
        temp = $('#dropDownButton').html();
        temp = temp.replace('<span class="caret"></span>',"");
        $('#dropDownButton').html(thisObj[0].innerHTML+'<span class="caret"></span>');
        console.log(temp);
        console.log(temp);
        $(thisObj[0]).html(temp);
        
    }

    
    