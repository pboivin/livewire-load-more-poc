# Load more implementation using Laravel Livewire

<img src="https://user-images.githubusercontent.com/7805679/178516083-a6b00b78-6d15-44fb-8d91-eeccca3f53ff.gif" width="203" alt="Demo">

### Introduction

This is a proof of concept on how to implement a Load more style listing with Livewire.

There are a few articles online presenting one approach that can be summarized in this way:

- Start with a query loading the first N results (first page)
- When 'Load more' is clicked, the same query is run loading N*2 results (first and second pages)
- And so on, for all remaining pages

This works well for a small number of items/pages but is obviously not very efficient as the original DB query simply grows from page to page.

The solution presented here takes a different approach:

- On the initial page load, preload all item IDs and group them into chunks (pages)
- Start with a query loading the first chunk of results (first page)
- When 'Load more' is clicked, load the next chunk of results (next page)

### Demo

The demo introduces 2 Livewire components:

- `PostList` [(class)](https://github.com/pboivin/livewire-load-more-poc/blob/main/app/Http/Livewire/PostList.php) [(view)](https://github.com/pboivin/livewire-load-more-poc/blob/main/resources/views/livewire/post-list.blade.php) - Performs the inital query and handles the 'Load more' functionality 
- `PostListItems` [(class)](https://github.com/pboivin/livewire-load-more-poc/blob/main/app/Http/Livewire/PostListItems.php) [(view)](https://github.com/pboivin/livewire-load-more-poc/blob/main/resources/views/livewire/post-list-items.blade.php) - Loads and displays the items for a single page

### Local Setup

Prerequisites:

- PHP >= 8.0
- Composer

```
composer i
cp .env.example .env
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
```
