<?php
error_reporting(0);
require '../../../../../framework/bootstrap.inc.php';
require '../../../../../addons/ewei_shopv2/defines.php';
require '../../../../../addons/ewei_shopv2/core/inc/functions.php';
global $_W;
global $_GPC;
ignore_user_abort();
set_time_limit(0);
$sets = pdo_fetchall('select uniacid from ' . tablename('ewei_shop_sysset'));
foreach ($sets as $set ) 
{
	$_W['uniacid'] = $set['uniacid'];
	if (empty($_W['uniacid'])) 
	{
		continue;
	}
	$goods = pdo_fetchall('select id,ispresell,presellover,presellovertime,presellstart,preselltimestart,presellend,preselltimeend from ' . tablename('ewei_shop_goods') . ' where uniacid = ' . $_W['uniacid'] . ' and ispresell > 0 and deleted = 0 ');
	if (!(empty($goods))) 
	{
		foreach ($goods as $key => $value ) 
		{
			if (($value['ispresell'] == 1) && ($value['presellover'] == 0) && ($value['presellend'] == 1)) 
			{
				if (time() < $value['preselltimeend']) 
				{
					$value['status'] = 0;
					pdo_update('ewei_shop_goods', array('status' => $value['status']), array('id' => $value['id']));
				}
			}
			else if (($value['ispresell'] == 1) && (time() < $value['preselltimeend'])) 
			{
				$time = $value['presellover'] * 86400000;
				if (($value['preselltimeend'] + $time) < time()) 
				{
					$value['status'] = 0;
					pdo_update('ewei_shop_goods', array('ispresell' => $value['status']), array('id' => $value['id']));
				}
			}
		}
	}
}
?>