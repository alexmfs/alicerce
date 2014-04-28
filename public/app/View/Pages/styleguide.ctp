<hr>
<p>Styleguide</p>
<hr>

<br>
<br>
<br>
<br>
<br>
Cakecodes
<code>
	<pre>
	Modelo de link
	==============
	&lt;a href="&lt;?=$this-&gt;webroot?&gt;nomedapagina"&gt;Nome do link&lt;/a&gt;

	Insercao do nomedapagina no arquivo app/config/routes.php
	==============
	Router::connect('/nomedapagina', array('controller' => 'pages', 'action' => 'display', 'nomedapagina'));

	Criar a página nomedapagina.ctp em app/view/pages
	</pre>
</code>
