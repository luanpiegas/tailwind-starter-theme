# Tailwild Starter Theme

A simple starter theme for WordPress that uses [Tailwind CSS](https://tailwindcss.com/).

## Prerequisites

This theme uses the Tailwind CLI, which requires [Node.js](https://nodejs.org/en/).

## Installation

- Download or clone this repository
- Run `npm install`

The default (and required) stylesheet will be compiled by Tailwind. See `style.css`.

## Usage

- Run `npm run watch` to watch for changes
- Run `npm run build` to build the stylesheet
- The `style.css` file will have all required information for your theme to be correctly identified as a valid theme by WordPress.
- If you want to update the theme information, edit the `assets/css/tailwind.css` file and then run `npm run build` or `npm run watch`.