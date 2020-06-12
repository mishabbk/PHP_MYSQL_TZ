## II MySQL

**a. Для заданного списка товаров получить названия всех категорий, в которых представлены товары
выбираю для нескольких товаров (9, 14, 6, 7, 2);**

`SELECT category.name 
FROM category 
LEFT JOIN product_to_category ON product_to_category.category_id = category.id 
WHERE product_to_category.product_id IN (9, 14, 6, 7, 2) 
GROUP BY category.id`

**b. Для заданной категории получить список предложений всех товаров из этой категории и ее дочерних категорий; 
Выбираю все товары из категории компьютеры (id = 2) и подкатегории (3 ноутбуки, 4 планшеты, 5 гибриды)**

`SELECT products.id ,products.name, products.price 
FROM products
LEFT JOIN product_to_category ON product_to_category.product_id = products.id
WHERE product_to_category.category_id = 2 OR product_to_category.category_id IN (SELECT id FROM category WHERE parent_id = 2)
GROUP BY product_id`

**c. Для заданного списка категорий получить количество предложений товаров в каждой категории; 
Выбираю количество товаров из категорий 7,8,9**

`SELECT category.name, COUNT(product_to_category.product_id) 
FROM category
LEFT JOIN product_to_category ON product_to_category.category_id = category.id
WHERE category.id IN (7,8,9)
GROUP BY category.name`

**d. Для заданного списка категорий получить общее количество уникальных предложений товара;
Выбираю количество уникальных товаров из категорий 3, 4, 5**

`SELECT COUNT(DISTINCT product_id) 
FROM product_to_category 
WHERE product_to_category.category_id IN (3, 4, 5)`

**e.  Для заданной категории получить ее полный путь в дереве (breadcrumb, «хлебные крошки»). 
Получаю полный путь для категории 4 уровня** 

`SELECT c1.name AS c1_name, c2.name AS c2_name, c3.name AS c3_name, c4.name AS c4_name 
FROM category AS c1
LEFT JOIN category AS c2 ON c2.id = c1.parent_id 
LEFT JOIN category AS c3 ON c3.id = c2.parent_id 
LEFT JOIN category AS c4 ON c4.id = c3.parent_id 
WHERE c1.id = 12`
