{*
 * BlueMedia_BluePayment extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU Lesser General Public License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 * @category       BlueMedia
 * @package        BlueMedia_BluePayment
 * @copyright      Copyright (c) 2015-2022
 * @license        https://www.gnu.org/licenses/lgpl-3.0.en.html GNU Lesser General Public License
*}
<div class="alert alert-warning">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<p>
        {l s='New version of Blue Media Payments is available. Go to modules and click Upgrade to update the module.' mod='bluepayment'}
		<span class="badge badge-warning">
			{l s='new version - 1.7.8' mod='bluepayment'}
		</span>
	</p>
    {if !empty($changelog)}
		<p>
			<a href="{$changelog|escape:'htmlall':'UTF-8'}">
                {l s='See changes' mod='bluepayment'}
			</a>
		</p>
    {/if}
</div>

