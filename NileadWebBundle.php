<?php
/**
 * Created by RubikIntegration Team.
 *
 * Date: 10/20/12
 * Time: 9:07 AM
 * Question? Come to our website at http://rubikin.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code or refer to the LICENSE
 * file of ZePLUF framework
 */

namespace Nilead\WebBundle;

use Sylius\Bundle\ResourceBundle\DependencyInjection\Compiler\ResolveDoctrineTargetEntitiesPass;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;


/**
 * Bundle.
 *
 */
class NileadWebBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $interfaces = array(
            'Nilead\WebBundle\Model\ContainerInterface' => 'nilead.model.container.class',
            'Nilead\WebBundle\Model\ContainerTypeInterface' => 'nilead.model.container_type.class',
            'Nilead\WebBundle\Model\FacilityInterface' => 'nilead.model.facility.class',
            'Nilead\WebBundle\Model\InventoryItemInterface' => 'nilead.model.inventory_item.class',
            'Nilead\WebBundle\Model\InventoryItemStatusTypeInterface' => 'nilead.model.inventory_item_status_type.class',
            'Nilead\WebBundle\Model\InventoryItemVarianceInterface' => 'nilead.model.inventory_item_variance.class',
            'Nilead\WebBundle\Model\InventoryItemVarianceReasonInterface' => 'nilead.model.inventory_item_variance_reason.class',
            'Nilead\WebBundle\Model\LocationInterface' => 'nilead.model.location.class',
            'Nilead\WebBundle\Model\LotInterface' => 'nilead.model.lot.class',
        );

        $container->addCompilerPass(new ResolveDoctrineTargetEntitiesPass('nilead_inventory', $interfaces));
    }
}
