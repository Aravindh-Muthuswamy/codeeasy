$("#btnhtml").click(function(){
    insertTextAtCursor(editor, "<html>");
  });
  $("#btnhtmlend").click(function(){
    insertTextAtCursor(editor, "</html>");
  });
  $("#btnbody").click(function(){
    insertTextAtCursor(editor, "<body>");
  });
  $("#btnbodyend").click(function(){
    insertTextAtCursor(editor, "</body>");
  });
  $("#btntitle").click(function(){
    insertTextAtCursor(editor, "<title>");
  });
  $("#btntitleend").click(function(){
    insertTextAtCursor(editor, "</title>");
  });
  $("#btndiv").click(function(){
    insertTextAtCursor(editor, "<div>");
  });
  $("#btndivend").click(function(){
    insertTextAtCursor(editor, "</div>");
  });
  $("#btnhead").click(function(){
    insertTextAtCursor(editor, "<head>");
  });
  $("#btnheadend").click(function(){
    insertTextAtCursor(editor, "</head>");
  });
  $("#btnscript").click(function(){
    insertTextAtCursor(editor, "<script>");
  });
  $("#btnscriptend").click(function(){
    insertTextAtCursor(editor, "</script>");
  });
  $("#btnh1").click(function(){
    insertTextAtCursor(editor, "<h1></h1>");
  });
  $("#btnh2").click(function(){
    insertTextAtCursor(editor, "<h2></h2>");
  });
  $("#btnh3").click(function(){
    insertTextAtCursor(editor, "<h3></h3>");
  });
  $("#btnh4").click(function(){
    insertTextAtCursor(editor, "<h4></h4>");
  });
  $("#btnh5").click(function(){
    insertTextAtCursor(editor, "<h5></h5>");
  });
  $("#btnh6").click(function(){
    insertTextAtCursor(editor, "<h6></h6>");
  });
  $("#btnp").click(function(){
    insertTextAtCursor(editor, "<p></p>");
  });
  $("#btninptxt").click(function(){
    insertTextAtCursor(editor, '<input type="text" id="txt" name="txt" required="">');
  });
  // document.getElementById("txt")
  $("#btngetelem").click(function(){
    insertTextAtCursor(editor, 'document.getElementById("txt")');
  });
  function insertTextAtCursor(editor, text) {
    var doc = editor.getDoc();
    var cursor = doc.getCursor();
    doc.replaceRange(text, cursor);
}