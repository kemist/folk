<?php $entity = $app->getEntity($entityName); ?>

<?php $this->layout('html', ['title' => $entity->title.' #'.$id." | {$app->title}"]); ?>

<?php $this->insert('nav', ['entityName' => $entityName, 'placeholder' => "#{$id}"]) ?>

<div class="page page-form">
	<div class="page-content">
		<?php
        echo $form
            //->data('module', 'submit')
            ->action($app->getRoute('update', ['entity' => $entityName, 'id' => $id]))
            ->openHtml();

        $form['data']->addClass('page-form-content');
        echo $form->html();
        ?>

		<div class="footer-primary is-floating">
			<button type="submit" class="button button-call">Save</button>
			<button type="submit" name="method-override" value="PUT" data-confirm="You will save this data as a new row. Are you sure?" formaction="<?= $app->getRoute('create', ['entity' => $entityName]); ?>" class="button button-link">Duplicate</button>
			<button type="submit" name="method-override" value="DELETE" data-confirm="This action cannot be undo. Are you sure?" formaction="<?= $app->getRoute('delete', ['entity' => $entityName, 'id' => $id]); ?>" class="button button-link">Delete</button>
		</div>
		<?= $form->closeHtml(); ?>
	</div>
</div>