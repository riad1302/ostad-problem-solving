#include <iostream>
#include <string>

//Time Complexity O(n * m) 
//Space Complexity O(1)

int strString(const std::string& haystack, const std::string& needle) {
    int index = -1;
    const int constNumber = 10000;
    int needleLength = needle.length();
    int haystackLength = haystack.length();

    // Early returns for edge cases
    if (needleLength == 0 || haystackLength < needleLength) {
        return index;
    }

    if (needle == haystack) {
        return 0;
    }

    int needleVal = 0;
    for (int i = 0; i < needleLength; i++) {
        needleVal += static_cast<int>(needle[i]) * constNumber;
    }

    for (int i = 0; i <= haystackLength - needleLength; i++) {
        int val = 0;
        std::string str = "";

        for (int j = 0; j < needleLength; j++) {
            val += static_cast<int>(haystack[i + j]) * constNumber;
            str += haystack[i + j];
        }

        if (val == needleVal && str == needle) {
            index = i;
            break;
        }
    }

    return index;
}

int main() {
    int index = strString("sadbutsad", "sad");
    //int index = strString("codemama", "ostad");
    //int index = strString("hello", "ll");
    std::cout << index << std::endl;
    return 0;
}
