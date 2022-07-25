const elem = (id) => document.getElementById(id)

const addClass = (elem, str) => elem.classList.add(str)
const delClass = (elem, str) => elem.classList.remove(str)
const toggleClass = (elem, str) => elem.classList.toggle(str)


// Menu open / close -------------------------

const hamburger = elem('hamburger')
const menuOverlay = elem('menu-overlay')
const menuOverlayBg = elem('menu-overlay-bg')
const menuExit = elem('menu-exit')

const menuOpen = () => addClass(menuOverlay, 'active')
const menuClose = () => delClass(menuOverlay, 'active')

hamburger.onclick = () => menuOpen()
menuOverlayBg.onclick = () => menuClose()
menuExit.onclick = () => menuClose()


// Dark / light mode (presumes starting in light) -------------

const UIbtn = elem('ui-mode-toggle')
const UIicons = { light: '&#xe518;', dark: '&#xe51c;' }
let darkMode = false

UIbtn.onclick = () =>  {

    toggleClass(document.body, 'dark-mode');

    if (darkMode) {
        darkMode = false
        UIbtn.innerHTML = UIicons.dark
    } else {
        darkMode = true
        UIbtn.innerHTML = UIicons.light
    }
}


// Header bar scroll visibility ----------------

if (elem('header-big')) {

    const headerBar = elem('header-bar')
    let lastScrollPos = 0
    let ticking = false
    
    function showHeaderBar(scroll_pos) {
        (scroll_pos > 0) ? delClass(headerBar, 'hidden') : addClass(headerBar, 'hidden')
    } 
    
    window.addEventListener('scroll', function(e) {
        console.log("called")
        lastScrollPos = window.scrollY
    
        if (!ticking) {
            window.requestAnimationFrame(function() {
            showHeaderBar(lastScrollPos)
            ticking = false
            })
    
            ticking = true
        }
    });
    
}

