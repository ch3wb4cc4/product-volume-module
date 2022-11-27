[{$smarty.block.parent}]

[{ if $oDetailsProduct->oxarticles__oxlength->value > 0 && $oDetailsProduct->oxarticles__oxwidth->value > 0 && $oDetailsProduct->oxarticles__oxheight->value > 0 }]
<div>

Maße (m): 
<b>[{$oDetailsProduct->oxarticles__oxlength->value}]</b> x 
<b>[{$oDetailsProduct->oxarticles__oxwidth->value}]</b> x
<b>[{$oDetailsProduct->oxarticles__oxheight->value}]</b>
<br />

Volumen (m<sup>2</sup>): 

[{math 
equation="x*y*z" 
x=$oDetailsProduct->oxarticles__oxlength->value 
y=$oDetailsProduct->oxarticles__oxwidth->value 
z=$oDetailsProduct->oxarticles__oxheight->value 
assign="ms_volume" }]

<b>[{$ms_volume}]</b>

<br />
<br />
</div>
[{/if}]