document.addEventListener("DOMContentLoaded",(()=>{const e=document.querySelector("body"),t=document.querySelector(".jetpack-sso-toggle"),d=document.getElementById("user_login"),o=document.getElementById("user_pass"),s=document.getElementById("jetpack-sso-wrap"),n=document.getElementById("loginform"),c=document.createElement("div");c.className="jetpack-sso-clear",n.appendChild(c),c.appendChild(document.querySelector("p.forgetmenot")),c.appendChild(document.querySelector("p.submit")),n.appendChild(s),e.classList.add("jetpack-sso-repositioned"),t.addEventListener("click",(t=>{t.preventDefault(),e.classList.toggle("jetpack-sso-form-display"),e.classList.contains("jetpack-sso-form-display")||(d.focus(),o.disabled=!1)}))}));