<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusWishlistPlugin\Guard;

use BitBag\SyliusWishlistPlugin\Entity\WishlistInterface;
use BitBag\SyliusWishlistPlugin\Exception\ProductVariantAlreadyInWishlistException;
use Sylius\Component\Core\Model\ProductVariantInterface;

final class ProductVariantInWishlistGuard implements ProductVariantInWishlistGuardInterface
{
    public function check(WishlistInterface $wishlist, ProductVariantInterface $productVariant): bool
    {
        if ($wishlist->hasProductVariant($productVariant)) {
            return true;
        } else {
            return false;
        }
    }
}
