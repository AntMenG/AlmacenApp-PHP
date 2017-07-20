-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-07-2017 a las 07:26:57
-- Versión del servidor: 5.6.35
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `buzzard`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuration`
--

CREATE TABLE `configuration` (
  `id` int(11) NOT NULL,
  `background` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `configuration`
--

INSERT INTO `configuration` (`id`, `background`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(24) DEFAULT NULL,
  `mark` varchar(24) DEFAULT NULL,
  `type` varchar(24) DEFAULT NULL,
  `description` varchar(220) DEFAULT NULL,
  `price` decimal(9,2) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `mark`, `type`, `description`, `price`, `quantity`) VALUES
(1, 'XA Ultra', 'Sony Xperia', 'Celular', 'Smartphone Sony Xperia XA Ultra 16 GB Lima 4G Desbloqueado', '5999.00', 20),
(2, 'Galaxy S7 Edge', 'Samsung', 'Celular', 'Smartphone Samsung Galaxy S7 Edge 32 GB Plateado Desbloqueado', '12499.00', 15),
(3, 'Moto G5', 'Motorola', 'Celular', 'Smartphone Motorola Moto G5 32 GB Gris Obscuro Desbloqueado', '5599.00', 7),
(4, 'Redmi 4A', 'Xiaomi', 'Celular', 'Smartphone Xiaomi Redmi 4A 32 GB Gris Desbloqueado', '3499.00', 20),
(5, 'Pixi 4', 'Alcatel', 'Celular', 'Smartphone Alcatel Pixi 4 8 GB Negro Desbloqueado', '1599.00', 12),
(6, 'B Black 8', 'Lenovo', 'Celular', 'Smartphone Lenovo B Black 8 GB Negro Desbloqueado', '1397.00', 0),
(7, 'UN65KS850D', 'Samsung', 'Smart TV', 'TV Samsung 65 Pulgads Curva 4K Ultra HD Smart TV LED UN65KS850D', '37299.00', 10),
(8, '65UH6150', 'LG', 'Smart TV', 'TV LG 65 Pulgadas 4K Ultra HD Smart TV LED 65UH6150', '26999.00', 10),
(9, 'TV Sony', 'Sony', 'Smart TV', 'TV Sony 75 Pulgadas 4K Ultra HD Smart TV LED', '64999.00', 17),
(10, 'UN55KU6290', 'Samsung', 'Smart TV', 'TV Samsung 55 Pulgadas 4K Ultra HD Smart TV LED UN55KU6290', '11229.00', 12),
(11, '65CU6200', 'Hisense', 'Smart TV', 'TV Hisense 65 Pulgadas 4K Ultra HD SMART TV LED 65CU6200', '19999.00', 15),
(12, '65PFL8900/F8', 'Philips', 'Smart TV', 'TV Philips 65 Pulgadas 4K Ultra HD Smart TV LED 65PFL8900/F8', '34999.00', 12),
(13, '65UH6150', 'LG', 'Smart TV', 'TV LG 65 Pulgadas 4K Ultra HD Smart TV LED 65UH6150', '26999.00', 17),
(14, 'Aspire VX 15', 'Acer', 'Laptop', 'Laptop Gaming Acer Intel Core i7 16GB RAM 1TB', '23999.00', 5),
(15, 'Macbook Air', 'Apple', 'Laptop', 'Macbook Air Apple Intel Core i5 8 GB RAM 256 GB', '19999.00', 12),
(16, '14-3467', 'Dell', 'Laptop', 'Laptop Dell Inspiron 14-3467 Intel Core i3 6 GB RAM 1 TB Negro', '11.00', 12),
(17, 'F5-573', 'Acer', 'Laptop', 'Laptop Acer Aspire F5-573 Intel Core i5 12 GB RAM 1 TB', '11999.00', 12),
(18, 'Mate 9 Lite', 'Huawei', 'Celular', 'Smartphone Huawei Mate 9 Lite 32 GB Dorado LTE Desbloqueado', '5799.00', 12),
(19, '310-20IAP', 'Lenovo', 'Computadora', 'Computadora Lenovo 310-20IAP Intel Celeron J3355 4GB RAM 1 TB', '8699.00', 9),
(20, 'Inspiron 3265', 'Dell', 'Computadora', 'Computadora Dell Inspiron 3265 AMD A6 4 GB RAM 1 TB', '11999.00', 12),
(21, 'Flip 360', 'Asus', 'Laptop', 'Laptop Asus Flip 360 TP201SA Intel Pentium 4 GB RAM 500 GB', '8299.00', 9),
(22, 'X Series X441UA', 'Asus', 'Laptop', 'Laptop Asus X Series X441UA Intel Core i3 4 GB RAM 1 TB', '10999.00', 11),
(23, 'Swift 7', 'Acer', 'Laptop', 'Laptop Acer Swift 7 SF713-51 Intel Core i5 8GB RAM 256 GB SSD', '24999.00', 18),
(24, 'Swift 3', 'Acer', 'Laptop', 'Laptop Acer Swift 3 Intel Core i5 8GB RAM 256 GB SSD', '14999.00', 11),
(26, 'Chromebook', 'Acer', 'Laptop', 'Chromebook Acer Intel Celeron 3205U 2 GB RAM 16 GB SSD', '4999.00', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usrs`
--

CREATE TABLE `usrs` (
  `id` int(10) NOT NULL,
  `user` varchar(24) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usrs`
--

INSERT INTO `usrs` (`id`, `user`, `password`, `type`) VALUES
(1, 'AntMenG', '$2y$10$rjQ7pZ488aaYulefgxSctOZMBXyMwajK/y7sVowrEtqmoyDtxkKb.', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usrs`
--
ALTER TABLE `usrs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `usrs`
--
ALTER TABLE `usrs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
