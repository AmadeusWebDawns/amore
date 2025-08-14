<?php
DEFINE('PARENTNODEPATH', __DIR__);

variables($sectionBC1 = [
	'nodeSlug' => $relPath = 'serenity',
	assetKey(PARENTNODEASSETS) => $relAssets = fileUrl(variable('section') . '/' . $relPath . '/assets/'),
	assetKey(NODEASSETS) => $relAssets,
	'nodeSiteName' => 'Serenity (Health) | AmadeusWeb',
	'nodeSafeName' => 'amw-serenity',
	'submenu-at-node' => true,
]);

variable('sectionBC1', $sectionBC1); //sets this only in sub[--sub] node where overwrites
