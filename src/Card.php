<?php

namespace components;

class Card 
{
   public function generatecard(array $config)
   {
      $href = "gastos-diretos/" . $config['nome'] . "/" . $config['ano'] . "";

       $output = '<div id="cartao" class="hidden relative bg-white border border-' . $config['color'] . '-500 py-6 px-16 rounded-xl h-auto w-full my-4 shadow-xl">
       <div name="cardname" class="text-' . $config['color'] . '-500 flex items-center w-full justify-center zoomttg">
          ' . $config['icon'] . '<span class="text-center text-base"> ' . $config['nome'] . '</span></i>
       </div>

       <div>
          <div class="text-gray-400 text-sm my-3 text-center" name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">
             <i class="far fa-clock"> <span>' . $config['ano'] . '</span> </i>
          </div>

          <div class="border-t-2"></div>

          <div class="my-4">
             <p class="text-xl text-center" name="texto" style="font-size: 1.25rem; line-height: 1.75rem;">R$ <span id="' . $config['nome'] . '"></span></p>
          </div>

          <div class="flex justify-center space-x-4">
             <a name="card" href="' . $href . '"
                   class="w-auto px-4 py-1.5 text-center text-white bg-' . $config['color'] . '-500 rounded-lg hover:bg-' . $config['color'] . '-700 cursor-pointer" name="texto" style="font-size: 1rem; line-height: 1.5rem;">Detalhar</a>
          </div>
          </div>
       </div>';
       return $output;
   }
}