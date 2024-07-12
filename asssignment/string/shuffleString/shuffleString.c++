#include <iostream>
#include <vector>
#include <string>

//Time Complexity O(n) 
//Space Complexity O(n)

std::string restoreString(const std::string& s, const std::vector<int>& indices) {
    std::string restored(s.size(), ' '); 
    
    for (int i = 0; i < s.size(); i++) {
        restored[indices[i]] = s[i];
    }
    
    return restored;
}

int main() {
    std::string str = "mamacode";
    std::vector<int> indices = {4,5,6,7,0,1,2,3};
    
    std::string result = restoreString(str, indices);
    std::cout << result << std::endl; // Output the result
    
    return 0;
}
