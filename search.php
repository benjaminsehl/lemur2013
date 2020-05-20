<?php get_header(); ?>


<?php if ( have_posts() ) : ?>

<div id="cse" style="width: 100%;">Hleð leitarniðurstöður...</div>
<script src="https://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  function parseQueryFromUrl () {
    var queryParamName = "s";
    var search = window.location.search.substr(1);
    var parts = search.split('&');
    for (var i = 0; i < parts.length; i++) {
      var keyvaluepair = parts[i].split('=');
      if (decodeURIComponent(keyvaluepair[0]) == queryParamName) {
        return decodeURIComponent(keyvaluepair[1].replace(/\+/g, ' '));
      }
    }
    return '';
  }

  google.load('search', '1', {language : 'is', lr : 'is', style : google.loader.themes.MINIMALIST});
  google.setOnLoadCallback(function() {
    var customSearchControl = new google.search.CustomSearchControl(
      '003939949262846506078:66utdtcjsvu');

    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    customSearchControl.setNoResultsString("Ekkert fannst.");
    customSearchControl.draw('cse');
    
    var queryFromUrl = parseQueryFromUrl();
    if (queryFromUrl) {
      customSearchControl.execute(queryFromUrl);
    }
  }, true);
</script>

<style type="text/css">
  .gsc-control-cse {
    font-family: "Palatino Linotype", "Book Antiqua", "Palatino", serif !important;
    font-size: 16px !important;
    border-color: #FFFFFF;
    background-color: #FFFFFF;
  }
  .gsc-control-cse .gsc-table-result {
    font-family: "Palatino Linotype", "Book Antiqua", "Palatino", serif !important;  
    font-size: 16px !important;
  }
  .cse .gs-result .gs-snippet, .gs-result .gs-snippet, .cse .gs-spelling-original, .gs-spelling-original {
  }
  input.gsc-input {
    border-color: #777777;
  }
  input.gsc-search-button {
    border-color: #333333;
    background-color: #333333;
  }
  .gsc-tabHeader.gsc-tabhInactive {
    border-color: #777777;
    background-color: #777777;
  }
  .gsc-tabHeader.gsc-tabhActive {
    border-color: #333333;
    background-color: #333333;
  }
  .gsc-tabsArea {
    border-color: #333333;
  }
  .gsc-webResult.gsc-result,
  .gsc-results .gsc-imageResult {
    border-color: #FFFFFF;
    background-color: #FFFFFF;
  }
  .gsc-webResult.gsc-result:hover,
  .gsc-imageResult:hover {
      border-color: #fff !important;    
      background-color: #FFFFFF;
  }
  .gs-webResult.gs-result a.gs-title:link,
  .gs-webResult.gs-result a.gs-title:link b,
  .gs-imageResult a.gs-title:link,
  .gs-imageResult a.gs-title:link b {
    color: #222;
    font-weight: bold;
    text-decoration: none;
  }
  .gs-webResult.gs-result a.gs-title:visited,
  .gs-webResult.gs-result a.gs-title:visited b,
  .gs-imageResult a.gs-title:visited,
  .gs-imageResult a.gs-title:visited b {
    color: #666;
  }
  
  .gs-webResult.gs-result a.gs-title:hover,
  .gs-webResult.gs-result a.gs-title:hover b,
  .gs-imageResult a.gs-title:hover,
  .gs-imageResult a.gs-title:hover b {
    color: #007dab;
  }
  .gs-webResult.gs-result a.gs-title:active,
  .gs-webResult.gs-result a.gs-title:active b,
  .gs-imageResult a.gs-title:active,
  .gs-imageResult a.gs-title:active b {
    color: #007dab;
  }
  .gsc-cursor-page {
    color: #222;
  }
  a.gsc-trailing-more-results:link {
    color: #444444;
  }
  .gs-webResult .gs-snippet,
  .gs-imageResult .gs-snippet,
  .gs-fileFormatType {
    color: #333333;
  }
  .gs-webResult div.gs-visibleUrl,
  .gs-imageResult div.gs-visibleUrl {
    color: #000000;
    color: #aaa !important;
    display: none;
  }
  .gs-webResult div.gs-visibleUrl-short {
    color: #000000;
    color: #aaa !important;
    display: none;
  }
  .gs-webResult div.gs-visibleUrl-long {
    display: block;
    color: #aaa !important;
    display: none;
  }
  .gcsc-branding-text {
      display: none;
  }
  .gsc-cursor-box {
    border-color: #fff !important;  
  }
  .gsc-results .gsc-cursor-box .gsc-cursor-page {
    border-color: #fff !important;  
    color: #222;
  }
  .gsc-results .gsc-cursor-box .gsc-cursor-current-page {
    color: #222;
  }
  .gcsc-branding-clickable, img.gcsc-branding-img-noclear {
      display: none;
  }
  .gs-promotion {
    border-color: #CCCCCC;
    background-color: #E6E6E6;
  }
  .gs-promotion a.gs-title:link,
  .gs-promotion a.gs-title:link *,
  .gs-promotion .gs-snippet a:link {
    color: #0000CC;
    text-decoration: none !important;
  }
  div.gs-title {
      text-decoration: none !important;
  }
  .gs-result .gs-title,
  .gs-result .gs-title * {
    text-decoration: none !important;
  }
  .gs-promotion a.gs-title:visited,
  .gs-promotion a.gs-title:visited *,
  .gs-promotion .gs-snippet a:visited {
    color: #0000CC;
  }
  .gs-promotion a.gs-title:hover,
  .gs-promotion a.gs-title:hover *,
  .gs-promotion .gs-snippet a:hover {
    color: #444444;
  }
  .gs-promotion a.gs-title:active,
  .gs-promotion a.gs-title:active *,
  .gs-promotion .gs-snippet a:active {
    color: #00CC00;
  }
  .gs-promotion .gs-snippet,
  .gs-promotion .gs-title .gs-promotion-title-right,
  .gs-promotion .gs-title .gs-promotion-title-right *  {
    color: #333333;
  }
  .gs-promotion .gs-visibleUrl,
  .gs-promotion .gs-visibleUrl-short {
    color: #00CC00;
    color: #aaa !important;
    display: none;
  }
   .gsc-results .gsc-cursor-page.gsc-cursor-current-page {
       background-color: #fff !important;
   }
   .gsc-results {
       border-color: #fff !important;  
   }
</style> 
<?php endif; ?>

<?php get_footer(); ?>