require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.deletePost = function(e) {
    if (confirm('本当に削除してもいいですか？')) {
        return true;
    }
    return false;
}
