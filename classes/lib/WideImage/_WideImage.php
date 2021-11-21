<html>
<head>
<title>Docs for page WideImage.php</title>
<link rel="stylesheet" type="text/css" href="../media/style.css">
</head>
<body>

<table border="0" cellspacing="0" cellpadding="0" height="48" width="100%">
  <tr>
    <td class="header_top">WideImage</td>
  </tr>
  <tr><td class="header_line"><img src="../media/empty.png" width="1" height="1" border="0" alt=""  /></td></tr>
  <tr>
    <td class="header_menu">
        
                                                                                                                    
                              		  [ <a href="../classtrees_WideImage.html" class="menu">class tree: WideImage</a> ]
		  [ <a href="../elementindex_WideImage.html" class="menu">index: WideImage</a> ]
		  	    [ <a href="../elementindex.html" class="menu">all elements</a> ]
    </td>
  </tr>
  <tr><td class="header_line"><img src="../media/empty.png" width="1" height="1" border="0" alt=""  /></td></tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td width="200" class="menu">
      <b>Packages:</b><br />
              <a href="../li_Exceptions.html">Exceptions</a><br />
              <a href="../li_Internal-Mappers.html">Internal-Mappers</a><br />
              <a href="../li_Internal-Operations.html">Internal-Operations</a><br />
              <a href="../li_Internals.html">Internals</a><br />
              <a href="../li_WideImage.html">WideImage</a><br />
            <br /><br />
                        <b>Files:</b><br />
      	  <div class="package">
			<a href="../WideImage/_Canvas.php.html">		Canvas.php
		</a><br>
			<a href="../WideImage/_Exception.php.html">		Exception.php
		</a><br>
			<a href="../WideImage/_Font---GDF.php.html">		GDF.php
		</a><br>
			<a href="../WideImage/_Image.php.html">		Image.php
		</a><br>
			<a href="../WideImage/_MapperFactory.php.html">		MapperFactory.php
		</a><br>
			<a href="../WideImage/_PaletteImage.php.html">		PaletteImage.php
		</a><br>
			<a href="../WideImage/_Font---PS.php.html">		PS.php
		</a><br>
			<a href="../WideImage/_TrueColorImage.php.html">		TrueColorImage.php
		</a><br>
			<a href="../WideImage/_Font---TTF.php.html">		TTF.php
		</a><br>
			<a href="../WideImage/_WideImage.php.html">		WideImage.php
		</a><br>
	  </div><br />
      
      
            <b>Classes:</b><br />
        <div class="package">
		    		<a href="../WideImage/WideImage.html">WideImage</a><br />
	    		<a href="../WideImage/WideImage_Canvas.html">WideImage_Canvas</a><br />
	    		<a href="../WideImage/WideImage_Font_GDF.html">WideImage_Font_GDF</a><br />
	    		<a href="../WideImage/WideImage_Font_PS.html">WideImage_Font_PS</a><br />
	    		<a href="../WideImage/WideImage_Font_TTF.html">WideImage_Font_TTF</a><br />
	    		<a href="../WideImage/WideImage_Image.html">WideImage_Image</a><br />
	    		<a href="../WideImage/WideImage_PaletteImage.html">WideImage_PaletteImage</a><br />
	    		<a href="../WideImage/WideImage_TrueColorImage.html">WideImage_TrueColorImage</a><br />
	  </div>
                </td>
    <td>
      <table cellpadding="10" cellspacing="0" width="100%" border="0"><tr><td valign="top">

<h1>Procedural File: WideImage.php</h1>
Source Location: /WideImage.php<br /><br />

<br>
<br>

<div class="contents">
<h2>Classes:</h2>
<dt><a href="../Exceptions/WideImage_InvalidImageHandleException.html">WideImage_InvalidImageHandleException</a></dt>
	<dd></dd>
<dt><a href="../Exceptions/WideImage_InvalidImageSourceException.html">WideImage_InvalidImageSourceException</a></dt>
	<dd></dd>
<dt><a href="../Exceptions/WideImage_GDFunctionResultException.html">WideImage_GDFunctionResultException</a></dt>
	<dd></dd>
<dt><a href="../WideImage/WideImage.html">WideImage</a></dt>
	<dd>The gateway class for loading images and core library functions</dd>
</div><br /><br />

<h2>Page Details:</h2>
<br /><br />
<h4>Tags:</h4>
<div class="tags">
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><b>author:</b>&nbsp;&nbsp;</td><td>Gasper Kozak</td>
  </tr>
  <tr>
    <td><b>copyright:</b>&nbsp;&nbsp;</td><td>2007-2011</td>
  </tr>
</table>
</div>
<br /><br />
<h4>Includes:</h4>
<div class="tags">
require_once(<a href="../WideImage/_TrueColorImage.php.html">WideImage::path().'TrueColorImage.php'</a>) [line 28]<br />
require_once(<a href="../WideImage/_PaletteImage.php.html">WideImage::path().'PaletteImage.php'</a>) [line 29]<br />
require_once(<a href="../Internals/_Coordinate.php.html">WideImage::path().'Coordinate.php'</a>) [line 31]<br />
require_once(<a href="../WideImage/_Exception.php.html">WideImage::path().'Exception.php'</a>) [line 25]<br />
require_once(<a href="../WideImage/_Image.php.html">WideImage::path().'Image.php'</a>) [line 27]<br />
require_once(<a href="../WideImage/_Canvas.php.html">WideImage::path().'Canvas.php'</a>) [line 32]<br />
require_once(<a href="../WideImage/_Font---TTF.php.html">WideImage::path().'Font/TTF.php'</a>) [line 36]<br />
require_once(<a href="../WideImage/_Font---GDF.php.html">WideImage::path().'Font/GDF.php'</a>) [line 37]<br />
require_once(<a href="../WideImage/_Font---PS.php.html">WideImage::path().'Font/PS.php'</a>) [line 38]<br />
require_once(<a href="../WideImage/_MapperFactory.php.html">WideImage::path().'MapperFactory.php'</a>) [line 33]<br />
require_once(<a href="../Internals/_OperationFactory.php.html">WideImage::path().'OperationFactory.php'</a>) [line 34]<br />
</div>
<br /><br />
<br /><br />
<br />

        <div class="credit">
		    <hr />
		    Documentation generated on Sat, 19 Feb 2011 12:55:43 +0100 by <a href="http://www.phpdoc.org">phpDocumentor 1.4.3</a>
	      </div>
      </td></tr></table>
    </td>
  </tr>
</table>

</body>
</html>