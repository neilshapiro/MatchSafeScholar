// load in divs so gradients get added to the pages
$( "<div class='gradient'></div>" ).insertBefore( "img" );

let displayMode = $(window).width() > 600 ? "double" : "single";

const singleModeWidth  = "80vw";
const singleModeHeight = "calc(80vw / 0.6875)";

const doubleModeWidth  = "calc(85vh * 1.375)";
const doubleModeHeight = "85vh";

let bookWidth  = 0;
let bookHeight = 0;

function updateBookDimensions() {
  bookWidth  = displayMode === "double" ? doubleModeWidth  : singleModeWidth;
  bookHeight = displayMode === "double" ? doubleModeHeight : singleModeHeight;
}

updateBookDimensions();

const flipbook = $("#flipbook");

const leftBtnDesktop  = $("#flipbookholder .left-button");
const rightBtnDesktop = $("#flipbookholder .right-button");

const leftBtnMobile  = $("#mobile-nav .left-button");
const rightBtnMobile = $("#mobile-nav .right-button");     

flipbook.turn({
  acceleration: false,
  display: displayMode,
  width: bookWidth,
  height: bookHeight,
  when: {
    turning: function(event, page, view) {
      updateNavButtons(page, view);
      autoCenter(page);
    },
    turned: function(event, page, view) {
      updateNavButtons(page, view);
      autoCenter(page);
    }
  }
});      

$(".left-button").click(function() {
  flipbook.turn("previous");
});
$(".right-button").click(function() {
  flipbook.turn("next");
});

// custom autocentering for use with display flex
function autoCenter(currentPage) {
  // don't need to autocenter on single mode view
  if (displayMode === "single") {
    flipbook.css("margin-left", "0px");      
  } else if (currentPage == 1) {
    const newMargin = flipbook.turn('size').width / 2;
    flipbook.css("margin-left", "-"+newMargin+"px");
  } else if (currentPage == 2) {
    // reset the left margin when we get to page 2
    flipbook.css("margin-left", "0px");
  }
}

function updateNavButtons(page, view) {
  const lastPage = flipbook.turn('pages');
          
  const leftBtn = displayMode === 'double' ? leftBtnDesktop : leftBtnMobile;
  const rightBtn = displayMode === 'double' ? rightBtnDesktop : rightBtnMobile;
  
  if (page == 1) {
    if (displayMode === "double") {
      leftBtn.css("visibility", "hidden");            
    } else
      leftBtn.hide();
  } else {
    if (displayMode === "double") {
      leftBtn.css("visibility", "visible");
    } else
      leftBtn.show();
  }
        
  if (page == lastPage || (view.length == 2 && view[1] == lastPage)) {
    if (displayMode === "double")
      rightBtn.css("visibility", "hidden");
    else
      rightBtn.hide();
  } else {
    if (displayMode === "double")
      rightBtn.css("visibility", "visible");
    else
      rightBtn.show();
  }
}

let prevViewportWidth = $(window).width();

function resizeBook() {
  // update display mode, width, and height in case it changed
  const viewportWidth = $(window).width();
  displayMode = viewportWidth > 600 ? "double" : "single";
  flipbook.turn("display", displayMode);
  /* if on single mode view and the viewport width remained the same, don't update
      the book dimensions
      The browser bar on mobile devices may hide/show as the user scrolls, which causes the
      viewport to resize. We don't want the book to get resized in this case. */
  if (displayMode === "single" && viewportWidth == prevViewportWidth)
    return;
  
  // update the prevViewportWidth with the current width
  prevViewportWidth = viewportWidth;
  updateBookDimensions();
  flipbook.turn("size", bookWidth, bookHeight);
  autoCenter(flipbook.turn("page"));
}

// update book size when window resizes
$(window).resize(function() {        
  resizeBook();        
});

const zoomIncrement = 50;

function zoomBook(direction) {
  // direction 1 is zoom in, -1 is zoom out
  let newHeight = flipbook.height();
  let newWidth =  flipbook.width();

  if (displayMode === "double") {

    newHeight += direction == 1 ? zoomIncrement : -zoomIncrement;
    newWidth = 1.375 * newHeight;

  } else {

    newWidth += direction == 1 ? zoomIncrement : -zoomIncrement;
    newHeight = newWidth / 0.6875;

  }
  
  flipbook.turn("size", newWidth, newHeight);
}

$("#zoom-in").click(function() {
  zoomBook(1);
  autoCenter(flipbook.turn("page"));
});

$("#zoom-out").click(function() {
  zoomBook(-1);
  autoCenter(flipbook.turn("page"));
});