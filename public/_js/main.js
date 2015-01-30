$(document).ready(function() {
    $(".notes-list li").click(function() {
       var noteID = $(this).data("noteid");
       displayCurrentNote(noteID);
       
       //LI UI change
       $(".notes-list li").removeClass("current-note-selected");
       $(this).addClass("current-note-selected");
    });

});

function displayCurrentNote(noteID) {
    $(".single-note.visible").fadeOut(300).removeClass("visible").addClass("hidden");
    $("#" + noteID).removeClass("hidden").addClass("visible").fadeIn(350);
}