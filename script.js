function githubToJsDelivr(githubLink) {
  const isValidGitHubLink = /^https:\/\/github.com\/[A-Za-z\d](?:[A-Za-z\d]|-(?=[A-Za-z\d])){0,38}\/[A-Za-z\d](?:[A-Za-z\d]|-(?=[A-Za-z\d])){0,100}(?:\/(?:[A-Za-z\d_-]|%2E|%2D){1,100}){0,100}(?:\/(?:[A-Za-z\d_-]|%2E|%2D){1,100}){0,100}(?:\/(?:[A-Za-z\d_-]|%2E|%2D){1,100}){0,100}(?:\.[A-Za-z]{1,20})?$/.test(githubLink);

  if (!isValidGitHubLink) {
    return "Invalid GitHub link!";
  }

  const [, , , username, repo, , branch, ...pathParts] = githubLink.split("/");

  const cdnLink = `https://cdn.jsdelivr.net/gh/${username}/${repo}@${branch}/${pathParts.join("/")}`;
  return cdnLink;
}
