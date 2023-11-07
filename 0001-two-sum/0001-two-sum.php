class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
    $numToIndex = [];
    
    foreach ($nums as $index => $value) {
        $complement = $target - $value;
        
        if (isset($numToIndex[$complement])) {
            return [$numToIndex[$complement], $index];
        }
        
        $numToIndex[$value] = $index;
    }
    
    return null;
}
}