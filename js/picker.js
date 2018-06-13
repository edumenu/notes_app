window.addEventListener("load", function () {
    var pk = new Piklor(".color-picker", [
            "#6495ED"
          , "#c0392b"
          , "#27ae60"
          , "#f1c40f"
          , "#9b59b6"
          , "#7f8c8d"
        ], { open: "#selectColor"})
      , textarea = pk.getElm("textarea");
//      , hover = pk.getElm("color-picker")

    pk.colorChosen(function (col) {
        textarea.style.borderColor = col;
        textarea.style.color = col;
    });
});