<?php
/** @var kmucms\uipages\PageComponent $this */
$fields = $this->getData('fields') ?? [];

$values = $this->getData('values') ?? [];

$valuesClass = $this->getData('valuesClass') ?? 'item';

$submitButtons = $this->getData('submitButtons') ?? ['ok' => ['label' => 'OK'], 'cancel' => ['label' => 'Abbrechen']];

$buttonName = $this->getData('submitButton') ?? 'submitButton';
?>


<div class="row">
  <div class="col-lg-6 col-md-8 mx-auto">
    <form method="POST">
      <?php foreach($fields as $kField => $field): ?>
        <div class="mb-2">
          <?php
          $compName = 'kmucms/bootstrap/form/items/' . ($field['type'] ?? 'input');
            if(!$this->isComponent($compName)){
            $compName = 'kmucms/bootstrap/form/items/input';
          }
          echo $this->getComponent($compName, [
            'value'    => $values[$kField] ?? ($field['default'] ?? ''),
            'nameHtml' => $valuesClass . '[' . $kField . ']',
            ] + $field)
          ?>
        </div>
      <?php endforeach; ?>  
      <div class="text-center mt-4">
        <?php foreach($submitButtons as $kButton => $button): ?>
          <button class="btn btn-<?= $button['type']??'primary' ?>" name="<?= $buttonName ?>" value="<?= $kButton ?>"><?= $button['label'] ?></button>
        <?php endforeach; ?>
      </div>
    </form>

  </div>
</div>

