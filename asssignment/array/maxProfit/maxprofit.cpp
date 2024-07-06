#include<iostream>
#include<vector>

int maxProfit(const std::vector<int>& prices) {
    if (prices.size() < 2) {
        return 0; // Not enough prices to make a profit
    }

    int buy = prices[0];
    int max_profit = 0;

    for (int price : prices) {
        if (price < buy) {
            buy = price;
        } else {
            int profit = price - buy;
            max_profit = std::max(max_profit, profit);
        }
    }

    return max_profit;
}

int main() {
    std::vector<int> prices = {7,1,5,3,6,4};
    maxProfit(prices);
}