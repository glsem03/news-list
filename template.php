<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php if(!empty($arResult['ITEMS'])):?>
<div class="article-list">
	<?php foreach($arResult['ITEMS'] as $arItem): ?>
		<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<a class="article-item article-list__item" href="" data-anim="anim-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="article-item__background">
				<?php if(!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
					<img src="../<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" data-src="xxxHTMLLINKxxx0.39186223192351520.41491856731872767xxx" alt=""/>
				<?php endif; ?>
			</div>
			<div class="article-item__wrapper">
				<div class="article-item__title"><?= isset($arItem['NAME']) ? $arItem['NAME'] : '' ?></div>
				<div class="article-item__content"><?= isset($arItem['PROPERTIES']['DESCRIPTION']['VALUE']) ? $arItem['PROPERTIES']['DESCRIPTION']['VALUE'] : '' ?></div>
			</div>
		</a>
	<?php endforeach; ?>
</div>
<?php endif; ?>
