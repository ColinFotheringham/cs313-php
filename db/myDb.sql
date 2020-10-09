CREATE TABLE food_category (
  id                 SERIAL        NOT NULL PRIMARY KEY
, category_name      varchar(255)  NOT NULL
);

CREATE TABLE recipe (
  id                 SERIAL        NOT NULL PRIMARY KEY
, food_category      INT           NOT NULL REFERENCES food_category(id)
, recipe_name        varchar(4000)  NOT NULL
, recipe_description varchar(4000)  NOT NULL
, prep_time          time          NOT NULL
, cook_time          time          NOT NULL
);

CREATE TABLE ingredients (
  id                 SERIAL        NOT NULL PRIMARY KEY
, recipe_id          INT           NOT NULL REFERENCES recipe(id)
, ingredient_name    varchar(4000)  NOT NULL
);

CREATE TABLE recipe_instructions (
  step_id            SERIAL        NOT NULL PRIMARY KEY
, recipe_id          INT           NOT NULL REFERENCES recipe(id)
, step_description   varchar(4000)  NOT NULL
);


ALTER TABLE recipe_instructions ALTER COLUMN step_description TYPE varchar(4000);

ALTER TABLE recipe ADD COLUMN image_dest varchar(4000);

/******************************************************************* 
  Insert basic food categorise into my database... 
**********************************************************************/
INSERT INTO food_category (category_name) Values ('Breakfast');
INSERT INTO food_category (category_name) Values ('Lunch');
INSERT INTO food_category (category_name) Values ('Dinner');

/******************************************************************* 
  Insert Recipes here... 
**********************************************************************/
INSERT INTO recipe (food_category, recipe_name, recipe_description, prep_time, cook_time) Values (1, 'Fluffy Pancakes', 'Tall and fluffy. These pancakes are just right. Topped with strawberries and whipped cream, they are impossible to resist.', '00:10', '00:10');
INSERT INTO recipe (food_category, recipe_name, recipe_description, prep_time, cook_time) Values (2, 'VELVEETA® Cheesy Broccoli Soup', 'Pinch yourself. You are not dreaming. This thick, creamy broccoli Cheddar soup thats ready in less than 30 minutes is the real deal.', '00:10', '00:25');
INSERT INTO recipe (food_category, recipe_name, recipe_description, prep_time, cook_time) Values (3, 'Chicken Parmesan', 'My version of chicken parmesan is a little different than what they do in the restaurants, with less sauce and a crispier crust.', '00:25', '00:20');

/******************************************************************* 
  Insert Ingredients here
**********************************************************************/

INSERT INTO ingredients (recipe_id, ingredient_name) Values (1, '3/4 cup milk');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (1, '2 tablespoons white vinegar');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (1, '2 tablespoons white sugar');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (1, '1 cup all-purpose flour');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (1, '1 teaspoon baking powder');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (1, '1/2 teaspoon baking soda');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (1, '1/2 teaspoon salt');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (1, '1 egg');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (1, '2 tablespoons butter melted');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (1, 'cooking spray');

/******************************************************************* 
  Insert 2nd Ingredients here
**********************************************************************/

INSERT INTO ingredients (recipe_id, ingredient_name) Values (2, '2 tablespoons butter or margarine');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (2, '1/4 cup chopped onion');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (2, '2 tablespoons flour');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (2, '2 1/2 cups milk');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (2, '3/4 pound VELVEETA®');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (2, 'cut up, 1 (10 ounce) package frozen chopped broccoli thawed/drained');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (2, '1/8 teaspoon pepper');

/******************************************************************* 
  Insert 3rd Ingredients here
**********************************************************************/

INSERT INTO ingredients (recipe_id, ingredient_name) Values (3, '2 large skinless');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (3, 'boneless chicken breast halves');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (3, '½ teaspoon kosher salt');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (3, '1 pinch ground black pepper');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (3, '1 pinch ground black pepper');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (3, '½ cup flour');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (3, '1 egg, beaten');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (3, '¾ cup dry bread crumbs');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (3, '½ cup light olive oil for frying');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (3, 'Cheese Spread: ½ cup ricotta cheese');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (3, '½ cup shredded sharp white Cheddar cheese');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (3, 'salt and freshly ground black pepper to taste');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (3, '½ teaspoon olive oil');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (3, '2 tablespoons grated Parmigiano-Reggiano cheese for topping');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (3, '1 cup marinara sauce');
INSERT INTO ingredients (recipe_id, ingredient_name) Values (3, '1 tablespoon chopped parsley');

/******************************************************************* 
  Insert 1 Recipe Instructions
**********************************************************************/

INSERT INTO recipe_instructions  (recipe_id, step_description) Values (1, 'Combine milk with vinegar in a medium bowl and set aside for 5 minutes to "sour".');
INSERT INTO recipe_instructions  (recipe_id, step_description) Values (1, 'Combine flour, sugar, baking powder, baking soda, and salt in a large mixing bowl. Whisk egg and butter into "soured" milk. Pour the flour mixture into the wet ingredients and whisk until lumps are gone.');
INSERT INTO recipe_instructions  (recipe_id, step_description) Values (1, 'Heat a large skillet over medium heat, and coat with cooking spray. Pour 1/4 cupfuls of batter onto the skillet, and cook until bubbles appear on the surface. Flip with a spatula, and cook until browned on the other side.');

/******************************************************************* 
  Insert 2 Recipe Instructions
**********************************************************************/

INSERT INTO recipe_instructions (recipe_id, step_description) Values (2, 'Melt butter in large saucepan on medium heat. Add onion; cook and stir 5 minutes or until onion is tender. Add flour; cook 1 minute or until bubbly, stirring constantly.');
INSERT INTO recipe_instructions (recipe_id, step_description) Values (2, 'Stir in milk. Bring to boil. Reduce heat to medium-low; simmer 1 minute.');
INSERT INTO recipe_instructions (recipe_id, step_description) Values (2, 'Add remaining ingredients. Cook until VELVEETA is melted and soup is heated through, stirring occasionally.');

/******************************************************************* 
  Insert 3 Recipe Instructions
**********************************************************************/

INSERT INTO recipe_instructions  (recipe_id, step_description) Values (3, 'Preheat oven to 500 degrees F (260 degrees C). Line a rimmed baking sheet with aluminum foil.');
INSERT INTO recipe_instructions  (recipe_id, step_description) Values (3, 'Gently pound chicken breasts between 2 layers of plastic until each breast is evenly thick. Place breasts on a plate and season 1 side with kosher salt and black pepper. Sprinkle with flour; press flour to coat the entire surface and help it adhere. Turn and repeat on second side with salt, pepper, and flour.');
INSERT INTO recipe_instructions  (recipe_id, step_description) Values (3, 'Brush excess flour from plate; place the chicken breasts back on the plate. Pour beaten egg over the breasts and coat each side. Cover bottom of a second plate with half the bread crumbs. Transfer chicken to the bread crumbs. Push crumbs up sides of chicken. Sprinkle on the remaining crumbs and thoroughly coat each side.');
INSERT INTO recipe_instructions  (recipe_id, step_description) Values (3, 'Heat 1/2 inch olive oil in a skillet over medium-high heat. Cook chicken until crispy and golden, 2 to 3 minutes per side. Transfer to prepared baking sheet.');
INSERT INTO recipe_instructions  (recipe_id, step_description) Values (3, 'Mix ricotta and Cheddar cheese together in a bowl. Stir in salt, black pepper, cayenne, and olive oil. Spread half the cheese mixture on each breast without extending all the way to the edges. Dust with Parmigiano-Reggiano cheese and drizzle with olive oil.');
INSERT INTO recipe_instructions  (recipe_id, step_description) Values (3, 'Bake on center rack of preheated oven until cheese is melted and chicken is no longer pink in the center and the juices run clear, 10 to 12 minutes. An instant-read thermometer inserted into the center should read at least 165 degrees F (74 degrees C).');
INSERT INTO recipe_instructions  (recipe_id, step_description) Values (3, 'To serve, ladle the heated marinara sauce in a wide circle on warm plates. Place chicken in center and sprinkle with chopped parsley.');


/********************************************************************
Simple queries
------------------------------------
SELECT * FROM food_category;
SELECT * FROM recipe;
SELECT * FROM Ingredients;
SELECT * FROM recipe_instructions;
********************************************************************/

/******************************************************************* 
Drop tables using this command  Use only in case of emergency!
--------------------------------------------------------------

DROP TABLE if exists food_category cascade;
DROP TABLE if exists recipe cascade;
DROP TABLE if exists Ingredients cascade;
DROP TABLE if exists recipe_instructions cascade;



DELETE FROM recipe WHERE recipe.id = 26;
DELETE FROM recipe WHERE recipe.id = 27;
DELETE FROM recipe WHERE recipe.id = 14;
DELETE FROM recipe WHERE recipe.id = 15;
DELETE FROM recipe WHERE recipe.id = 16;
DELETE FROM recipe WHERE recipe.id = 17;
DELETE FROM recipe WHERE recipe.id = 18;

DELETE FROM ingredients WHERE recipe_id = 26;
DELETE FROM ingredients WHERE recipe_id = 27;
DELETE FROM ingredients WHERE recipe_id = 14;
DELETE FROM ingredients WHERE recipe_id = 15;
DELETE FROM ingredients WHERE recipe_id = 16;
DELETE FROM ingredients WHERE recipe_id = 17;
DELETE FROM ingredients WHERE recipe_id = 18;

DELETE FROM recipe_instructions WHERE recipe_id = 26;
DELETE FROM recipe_instructions WHERE recipe_id = 27;
DELETE FROM recipe_instructions WHERE recipe_id = 14;
DELETE FROM recipe_instructions WHERE recipe_id = 15;
DELETE FROM recipe_instructions WHERE recipe_id = 16;
DELETE FROM recipe_instructions WHERE recipe_id = 17;
DELETE FROM recipe_instructions WHERE recipe_id = 18;
**********************************************************************/


/**********************************************************************
  Update syntax:
**********************************************************************/

UPDATE recipe
	SET image_dest = 'uploads/wraps.jpg'
	WHERE id = 11
	RETURNING id, image_dest;

