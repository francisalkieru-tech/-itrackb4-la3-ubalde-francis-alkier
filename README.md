# Question
Q1: Explain the order you placed your featured route and your detail route in, and what would happen if you swapped them.
Answer: Based my experience when i place the route of the feature in the buttom of id route when i test it i  got an error which is the 404 beacuse the featured is not valid the id thats why laravel thinks the featured is the id value of being searched and since there is no product with that id that why it triggers the abort which 404 error.

Q2: What happens when someone visits an id that does not exist in your data, and what did you write to make that happen?
Answer: If someone visit the visits the page url with id that doesn't exist will the function is gonna check first using !isset if that id have already exits in the data or not. If not it will display the 404 error which triggered by abort(404).

Q3: Why do your links use route names instead of typed URLs? Give one concrete thing that would break if they did not.
Answer: I use route names instead of typed URLs so that my links still work even if I change the routes name URL. When I test it I change my list route from products to store and my Back to Product List link still worked because it use route products.index
