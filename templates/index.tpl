{* Smarty *}
{include file="header.tpl"}
<div class="container">
	<div class="row"
		<div id="menu" class="col-xs-10">
			 <div id="list">Persona|Boj|Kouzla|Putování|Archetyp</div>
			 <div id="account">{$account}</div>
		</div>
	</div>
	
	<div id="persona" class="row">
		<div class="col-xs-12 col-md-3 box">
			<div>Postava</div>{$name} ({$age})
		</div>
		<div class="col-xs-12 col-md-3 box">
			<div>Rasa</div><strong>{$race} ({$sex})</strong>
		</div>
		<div class="col-xs-12 col-md-3 box">
			<div>Proporce</div><strong>{$height}, {$weight}</strong>
		</div>
		<div class="col-xs-12 col-md-3 box">
			<div>Úroveň: </div><strong>{$level} ({$experience} XP)</strong>
		</div>
	</div>

<div id="vlastnosti">

</div>

</div>

{include file="footer.tpl"}