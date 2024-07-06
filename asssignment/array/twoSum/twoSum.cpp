#include <iostream>
#include <unordered_map>
#include <vector>

std::vector<int> twoSum(std::vector<int>& nums, int target)
{
   std::unordered_map<int, int>numMap;
   for (int i = 0;  i < nums.size(); i++) {
       int complemet = target - nums[i];
       if(numMap.find(complemet) != numMap.end()) {
           return {numMap[complemet], i};
       } else {
           numMap[nums[i]] = i;
       }
   }
   return {};
}


int main() {
    std::vector<int> nums = {2, 7, 11, 15};
    std::vector<int> nums = {3,2,4};
    int target = 9;
    int target = 6;
    std::vector<int> result = twoSum(nums, target);
    
    if (!result.empty()) {
        std::cout << "Indices: " << result[0] << ", " << result[1] << std::endl;
    } else {
        std::cout << "No two sum solution found" << std::endl;
    }


    return 0;
}