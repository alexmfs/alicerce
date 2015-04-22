		<div class="gallery">
			<figure>
				<img src="<?=$this->webroot?>img/imoveis/large/001.jpg">
			</figure>
			<div id="thumblist" class="thumblist">
				<ul>
					<?php for ($i = 1; $i <=7; $i++) { ?>
					<li>
						<a
						href="<?=$this->webroot?>img/imoveis/large/00<?=$i?>.jpg"
						>
							<img src='<?=$this->webroot?>img/imoveis/thumb/00<?=$i?>.jpg' width="75">
						</a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
