class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums): bool {
        return count($nums) !== count(array_unique($nums));
    }
}