// app/View/Elements/pagination.ctp

<ol class="pagination">
	<li class="disabled">
		<a>Anterior <i class="fa fa-caret-left"></i></a>
	</li>
	<li class="active">
		<a>1</a>
	</li>
	<li>
		<a href="#">2</a>
	</li>
	<li>
		<a href="#">3</a>
	</li>
	<li>
		<a href="#">4</a>
	</li>
	<li>
		<a href="#">5</a>
	</li>
	<li>
		<a href="#">6</a>
	</li>
	<li class="next">
		<a href="#" rel="next" currentClass="disabled">Próxima <i class="fa fa-caret-right"></i></a>
	</li>
</ol>

// CakePhp
<ol class="pagination">
    <?php
     echo $this->Paginator->prev(__('Anterior'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
     echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
     echo $this->Paginator->next(__('Próxima'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
    ?>
</ol>
