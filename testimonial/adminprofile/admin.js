const STORAGE_KEY = "grandSkTestimonialMedia";

const state = {
  images: [],
  videos: [],
  imageIndex: 0,
  videoIndex: 0
};

function readPublishedMedia() {
  try {
    return JSON.parse(localStorage.getItem(STORAGE_KEY)) || { images: [], videos: [] };
  } catch (error) {
    return { images: [], videos: [] };
  }
}

function savePublishedMedia(media) {
  localStorage.setItem(STORAGE_KEY, JSON.stringify(media));
}

function fileToDataUrl(file) {
  return new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.onload = () => resolve({
      name: file.name,
      url: reader.result,
      type: file.type,
      publishedAt: new Date().toISOString()
    });
    reader.onerror = reject;
    reader.readAsDataURL(file);
  });
}

async function filesFromInput(input) {
  const files = Array.from(input.files || []);
  return Promise.all(files.map(fileToDataUrl));
}

function updateCount(type) {
  const count = state[type].length;
  const target = document.querySelector(`[data-count="${type}"]`);
  if (target) target.textContent = `${count} selected`;
}

function renderCarousel(type) {
  const stage = document.querySelector(`[data-stage="${type}"]`);
  const label = document.querySelector(`[data-label="${type}"]`);
  const items = state[type];
  const indexKey = type === "images" ? "imageIndex" : "videoIndex";

  if (!stage || !label) return;

  if (!items.length) {
    stage.innerHTML = `<div class="empty-state">Choose ${type} and click Preview</div>`;
    label.textContent = "No preview";
    return;
  }

  const item = items[state[indexKey]];
  const media = type === "images"
    ? `<img src="${item.url}" alt="${item.name}">`
    : `<video src="${item.url}" controls muted playsinline></video>`;

  stage.innerHTML = media;
  label.textContent = `${state[indexKey] + 1} / ${items.length} - ${item.name}`;
}

async function previewMedia(type) {
  const input = document.querySelector(`[data-input="${type}"]`);
  const status = document.querySelector(`[data-status="${type}"]`);
  if (!input) return;

  if (status) status.textContent = "Preparing preview...";

  try {
    state[type] = await filesFromInput(input);
    state[type === "images" ? "imageIndex" : "videoIndex"] = 0;
    updateCount(type);
    renderCarousel(type);
    if (status) status.textContent = state[type].length ? "Preview ready." : `Please choose ${type}.`;
  } catch (error) {
    if (status) status.textContent = "Preview failed. Try smaller files.";
  }
}

function moveSlide(type, direction) {
  const items = state[type];
  if (!items.length) return;

  const indexKey = type === "images" ? "imageIndex" : "videoIndex";
  state[indexKey] = (state[indexKey] + direction + items.length) % items.length;
  renderCarousel(type);
}

function publishMedia(type) {
  const status = document.querySelector(`[data-status="${type}"]`);
  const count = state[type].length;

  if (!count) {
    if (status) status.textContent = `Please preview ${type} before publishing.`;
    return;
  }

  try {
    const published = readPublishedMedia();
    published[type] = state[type];
    savePublishedMedia(published);
    if (status) status.textContent = `${count} ${type} published to testimonial page.`;
  } catch (error) {
    if (status) status.textContent = "Browser storage is full. Use fewer or smaller files.";
  }
}

function clearPublishedMedia() {
  localStorage.removeItem(STORAGE_KEY);
  document.querySelectorAll(".publish-status").forEach(status => {
    status.textContent = "Published testimonial media cleared.";
  });
}

function loadExistingMedia() {
  const published = readPublishedMedia();
  state.images = published.images || [];
  state.videos = published.videos || [];
  updateCount("images");
  updateCount("videos");
  renderCarousel("images");
  renderCarousel("videos");
}

document.addEventListener("DOMContentLoaded", () => {
  loadExistingMedia();

  document.querySelectorAll("[data-preview]").forEach(button => {
    button.addEventListener("click", () => previewMedia(button.dataset.preview));
  });

  document.querySelectorAll("[data-move]").forEach(button => {
    button.addEventListener("click", () => moveSlide(button.dataset.move, Number(button.dataset.direction)));
  });

  document.querySelectorAll("[data-publish]").forEach(button => {
    button.addEventListener("click", () => publishMedia(button.dataset.publish));
  });

  const clearButton = document.querySelector("[data-clear-media]");
  if (clearButton) clearButton.addEventListener("click", clearPublishedMedia);
});
