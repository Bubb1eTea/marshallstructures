<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ntcertificate $ntcertificate
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 * @var string[]|\Cake\Collection\CollectionInterface $designstandards
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ntcertificate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ntcertificate->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ntcertificates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ntcertificates form content">
            <?= $this->Form->create($ntcertificate) ?>
            <fieldset>
                <legend><?= __('Edit Ntcertificate') ?></legend>
                <?php
                    echo $this->Form->control('project_id', ['options' => $projects, 'empty' => true]);
                    echo $this->Form->control('lotportionnum', ['label' => "Lot/Portion Number"]);
                    echo $this->Form->control('location', ['label' => "Location"]);
                    echo $this->Form->control('townhundred', ['label' => "Town/Hundred"]);
                    echo $this->Form->control('workdesc', ['label' => "Description of works"]);
                    echo $this->Form->control('drawingno', ['label' => "Drawing No."]);
                    echo $this->Form->control('other', ['label' => "Other"]);
                    echo $this->Form->control('designstandards._ids', ['label' => "Design Basis", 'options' => $designstandards]);
                    echo $this->Form->control('buildingclass', ['label' => "Class of Building (BCA)"]);
                    echo $this->Form->control('constructiontype', ['label' => "Type of Construction (BCA volume 1 §C1.1) eg. Type A fire-resisting construction)"]);
                    echo $this->Form->control('buildingimportancelevel', ['label' => "Building Importance Level (BCA Table B1.2a)"]);
                    echo $this->Form->control('windexceedance', ['label' => "Annual Probability of Exceedance for Wind (BCA Table 1.2b)"]);
                    echo $this->Form->control('region', ['label' => "Region"]);
                    echo $this->Form->control('windspeed', ['label' => "Regional ultimate wind speed Vʳ (m/s)"]);
                    echo $this->Form->control('terraincat', ['label' => "Terrain Category"]);
                    echo $this->Form->control('referenceheight', ['label' => "Reference height (m)"]);
                    echo $this->Form->control('mz', ['label' => "Mᶻ⸴ᶜᵃᵗ"]);
                    echo $this->Form->control('ms', ['label' => "Mˢ"]);
                    echo $this->Form->control('mt', ['label' => "Mᵗ"]);
                    echo $this->Form->control('windspeedrefheight', ['label' => "Vᵈᵉˢθ  Design Wind Speed at reference height (m/s)"]);
                    echo $this->Form->control('intpressure', ['label' => "Internal Pressure Coefficients (Cₚ,ᵢ)"]);
                    echo $this->Form->control('expressurewall', ['label' => "External Pressure Coefficients (Cₚ,ₑ) Walls"]);
                    echo $this->Form->control('expressureroof', ['label' => "External Pressure Coefficients (Cₚ,ₑ) Roof"]);
                    echo $this->Form->control('netpressureroofwall', ['label' => "Net Pressure Coefficients (Cₚ,ₙ) Roof / Walls"]);
                    echo $this->Form->control('imposedloadfloorroof', ['label' => "Imposed Loads, kPa Floor / Roof"]);
                    echo $this->Form->control('earthquakecat', ['label' => "Earthquake Design Category, EDC (Table 2.1 of AS 1170.4)"]);
                    echo $this->Form->control('earthexceedance', ['label' => "Annual Probability of Exceedance for Earthquake Actions (BCA Table 1.2b)"]);
                    echo $this->Form->control('importancelevel', ['label' => "Importance Level (BCA)"]);
                    echo $this->Form->control('hazardfactor', ['label' => "Hazard Factor, Z (Section 3)"]);
                    echo $this->Form->control('subsoilclass', ['label' => "Class of Sub-Soil (Section 4)"]);
                    echo $this->Form->control('bearingcap', ['label' => "Safe Foundation Bearing Capacity, kPa"]);
                    echo $this->Form->control('siteclass', ['label' => "Site classification (AS2870)"]);
                    echo $this->Form->control('exclusion', ['label' => "The following items are excluded and shall be certified separately"]);
                    echo $this->Form->control('comment', ['label' => "Comments"]);
                    echo $this->Form->control('compname', ['label' => "Company Name"]);
                    echo $this->Form->control('compntregnum', ['label' => "Company NT Registration Number"]);
                    echo $this->Form->control('name', ['label' => "Name"]);
                    echo $this->Form->control('ntregnum', ['label' => "Nominee/Indicidual NT Registration Number"]);
                    echo $this->Form->control('date', ['label' => "Date", 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>