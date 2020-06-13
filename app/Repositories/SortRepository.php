<?php
namespace App\Repositories;

class SortRepository
{
   public function selectSortDESC(array $array)
   {
      $count = count($array);
      for ($i=0;$i<=$count;$i++)
      {
         $maxIndex = $i;
         for ($j=$i+1;$j<$count;$j++)
         {
            if($array[$maxIndex]<$array[$j]){
               $tmp=$array[$maxIndex];
               $array[$maxIndex]=$array[$j];
               $array[$j] = $tmp;
            }
         }
      }
      return $array;
   }
}