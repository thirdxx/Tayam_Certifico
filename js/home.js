const tabs = document.querySelectorAll('.tab');
      const pages = document.querySelectorAll('.page');

      tabs.forEach(tab => {
        tab.addEventListener('click', e => {
          e.preventDefault();
          const targetId = e.target.getAttribute('href');
          const targetPage = document.querySelector(targetId);
          tabs.forEach(tab => tab.classList.remove('active'));
          pages.forEach(page => page.classList.remove('active'));
          e.target.classList.add('active');
          targetPage.classList.add('active');
        });
      });