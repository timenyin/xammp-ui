/**
 * Recent Projects Tracker & Interactive Helper
 * Handles LocalStorage storage for recently accessed local projects
 * and renders dynamic dropdown links in the navigation bar.
 */

document.addEventListener('DOMContentLoaded', () => {
    const STORAGE_KEY = 'harmony_xampp_recent_projects';
    const MAX_ITEMS = 5;

    const dropdownContainer = document.getElementById('recentProjectsDropdown');
    const searchInput = document.getElementById('projectSearchInput');
    const projectCards = document.querySelectorAll('.project-card-col');

    // Load and render recent projects on page load
    renderRecentProjects();

    // Event listener for project links click
    document.addEventListener('click', (e) => {
        const link = e.target.closest('.js-project-link');
        if (link) {
            const name = link.getAttribute('data-project-name') || link.textContent.trim();
            const url = link.getAttribute('href');
            if (name && url) {
                saveRecentProject(name, url);
            }
        }
    });

    /**
     * Save a project to LocalStorage
     */
    function saveRecentProject(name, url) {
        let recents = getRecentProjects();
        // Remove duplicate if already exists
        recents = recents.filter(item => item.url !== url && item.name.toLowerCase() !== name.toLowerCase());
        // Add to beginning
        recents.unshift({
            name: name,
            url: url,
            timestamp: new Date().getTime()
        });
        // Keep max items
        if (recents.length > MAX_ITEMS) {
            recents = recents.slice(0, MAX_ITEMS);
        }
        localStorage.setItem(STORAGE_KEY, JSON.stringify(recents));
        renderRecentProjects();
    }

    /**
     * Get recent projects array from LocalStorage
     */
    function getRecentProjects() {
        try {
            const data = localStorage.getItem(STORAGE_KEY);
            return data ? JSON.parse(data) : [];
        } catch (err) {
            console.error('Failed to parse recent projects from storage', err);
            return [];
        }
    }

    /**
     * Render the dropdown HTML items
     */
    function renderRecentProjects() {
        if (!dropdownContainer) return;

        const recents = getRecentProjects();

        if (recents.length === 0) {
            dropdownContainer.innerHTML = `
                <div class="retro-dropdown-header">Recently Opened</div>
                <div class="retro-dropdown-empty">No recent projects yet.<br>Click a project below to log it!</div>
            `;
            return;
        }

        let html = `<div class="retro-dropdown-header">Recently Opened</div>`;
        recents.forEach(item => {
            html += `
                <a href="${item.url}" target="_blank" class="retro-dropdown-item js-project-link" data-project-name="${item.name}">
                    <span><i class="ri-folder-open-line me-1" style="color:var(--primary);"></i> ${item.name}</span>
                    <i class="ri-arrow-right-up-line text-muted"></i>
                </a>
            `;
        });

        html += `
            <div class="retro-dropdown-clear">
                <button type="button" class="retro-dropdown-clear-btn" id="clearRecentProjectsBtn">
                    <i class="ri-delete-bin-line me-1"></i>Clear History
                </button>
            </div>
        `;

        dropdownContainer.innerHTML = html;

        // Add clear button listener
        const clearBtn = document.getElementById('clearRecentProjectsBtn');
        if (clearBtn) {
            clearBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                localStorage.removeItem(STORAGE_KEY);
                renderRecentProjects();
            });
        }
    }

    /**
     * Live search / filtering for project cards
     */
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase().trim();
            projectCards.forEach(col => {
                const name = col.getAttribute('data-project-name') || '';
                if (name.toLowerCase().includes(query)) {
                    col.style.display = '';
                } else {
                    col.style.display = 'none';
                }
            });
        });
    }
});
