<?php
class MainProductController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController {
    #[Route('/product/{id}', name: 'product_show')]
    public function show(int $id, ProductRepository $productRepository): Response
    {
        $product = $productRepository
            ->find($id);
    }
}
