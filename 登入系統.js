function closeModal() {
    let modal = document.getElementById('login');
    
    // 先讓 opacity 逐漸變淡
    let fadeEffect = setInterval(() => {
        if (modal.style.opacity > '0') {
            modal.style.opacity -= 0.1; // 逐漸淡出
        } else {
            clearInterval(fadeEffect);
            modal.style.display = 'none'; // 最後隱藏
        }
    }, 50);
}

// 修正開啟時，讓 opacity 重置為 1
function openModal() {
    let modal = document.getElementById('login');
    modal.style.display = 'block'; // 讓視窗可見
    modal.style.opacity = '1'; // 確保透明度恢復
}
