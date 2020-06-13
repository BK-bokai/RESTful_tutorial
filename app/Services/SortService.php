<?php
namespace App\Services;

use App\Repositories\SortRepository;

class SortService 
{
   protected $SortRepository;

   public function __construct(SortRepository $SortRepository)
   {
      $this->SortRepository =  $SortRepository;
   }
   public function selectSortASC(array $array)
   {
      $count = count($array);
      for ($i=0;$i<=$count;$i++)
      {
         $minIndex = $i;
         for ($j=$i+1;$j<$count;$j++)
         {
            if($array[$minIndex]>$array[$j]){
               $tmp=$array[$minIndex];
               $array[$minIndex]=$array[$j];
               $array[$j] = $tmp;
            }
         }
      }
      return $array;
   }

   public function findMax(array $array)
   {
      $count = count($array);
      $maxValue = 0;
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

      return $array[0];
   }

   public function selectSortDESC(array $array)
   {
      return $this->SortRepository->selectSortDESC($array);
   }
}