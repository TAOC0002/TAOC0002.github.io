# frozen_string_literal: true

source "https://rubygems.org"

# Skip html-proofer / nokogumbo / rubocop. They are theme test tools, not needed
# to serve the site, and nokogumbo fails to compile on current Homebrew Ruby.
gemspec development_group: :theme_dev
# commenting below to remove dependency with "github-pages" 
# gem "github-pages", group: :jekyll_plugins

gem "jekyll-seo-tag"
gem "jekyll-sitemap"

# https://github.com/jekyll/jekyll/issues/8523#issuecomment-751409319
# When running locally, we run into the following error —
# `require': cannot load such file -- webrick (LoadError)
# adding this avoids it
gem "webrick"

# adding the following gems to support removal of "github-pages" dependency
gem "jemoji"
gem "kramdown-parser-gfm"
