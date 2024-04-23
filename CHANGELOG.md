# Changelog

All notable changes to this project will be documented in this file. See [standard-version](https://github.com/conventional-changelog/standard-version) for commit guidelines.

### [3.1.2](https://github.com/UN-OCHA/common-design-wordpress/compare/v3.1.1...v3.1.2) (2024-04-23)

### Features

* **CD:** upgrade to CD v9.4.0

### Bug Fixes

* **a11y:** more SR improvements ([fa799bc](https://github.com/UN-OCHA/common-design-wordpress/commit/fa799bc6b24d80245b97ee1e3a7c95793279b407))
* **perf:** load Google Fonts async ([8556726](https://github.com/UN-OCHA/common-design-wordpress/commit/855672680f64f0398537c2abfaa1c364add6a06c))
* remove duplicate CSS enqueue statement ([880e727](https://github.com/UN-OCHA/common-design-wordpress/commit/880e72730d98aacf4ccdbd7d0561e5f8c8e0dd8d))

### [3.1.1](https://github.com/UN-OCHA/common-design-wordpress/compare/v3.1.0...v3.1.1) (2023-11-30)

No commits were created with the correct convention to appear here.

### [3.0.2](https://github.com/UN-OCHA/common-design-wordpress/compare/v3.0.1...v3.0.2) (2023-06-20)

### Bug Fixes

* 404 page needs CD Layout containers ([8ce1513](https://github.com/UN-OCHA/common-design-wordpress/commit/8ce1513c89772b9eff1a3f8c41d88fcac43d034e))
* **a11y:** improve screen reading for OCHA Mandate ([bd4077c](https://github.com/UN-OCHA/common-design-wordpress/commit/bd4077c3e8d95805773f0aa483b6052c3702e7da))
* register sidebar support in proper file, rename our init function ([9af8517](https://github.com/UN-OCHA/common-design-wordpress/commit/9af8517ce212cb0d7240c98c487d9cbe57c572c6))

## [3.0.1](https://github.com/UN-OCHA/common-design-wordpress/compare/v3.0.0...v3.0.1) (2023-06-19)

### Bug Fixes

* **admin:** further improvements to Gutenberg UX ([08871dd](https://github.com/UN-OCHA/common-design-wordpress/commit/08871dd4da9fca6847a95cd4dc9a25861cb04a83))
* **admin:** improve Gutenberg WYSIWYG ([0ac042d](https://github.com/UN-OCHA/common-design-wordpress/commit/0ac042d7edd5aa76c5f8067ec1a8b1dcb3935c01))
* allow mobile logo to be set via CSS Var ([bc7286d](https://github.com/UN-OCHA/common-design-wordpress/commit/bc7286defc55d09a64888d0e795feb113261c824))
* remove trailing slash from Google Font markup ([85f4f82](https://github.com/UN-OCHA/common-design-wordpress/commit/85f4f82020f2680f25fb7edd164fbf2bf859ca39))
* ul/ol should be capped to --cd-max-content-width ([98f26ef](https://github.com/UN-OCHA/common-design-wordpress/commit/98f26ef93bf8419bc22ef0d3cc66cf5290333882))


## [3.0.0](https://github.com/UN-OCHA/common-design-wordpress/compare/v2.0.0...v3.0.0) (2023-05-11)

### ⚠ BREAKING CHANGES

* Upgraded to CD v8
* The npm commands have been renamed from `stylelint` and `stylelint-fix` to `css:lint` and `css:lint-fix` respectively.

### Bug Fixes

* **a11y:** Lighthouse is offended by maximum-scale less than 5 ([c4771e5](https://github.com/UN-OCHA/common-design-wordpress/commit/c4771e50af07cb3731f899923ecd7bdd21147325))
* **a11y:** restore <html> lang attribute ([d90c96d](https://github.com/UN-OCHA/common-design-wordpress/commit/d90c96dae843234500a6fbcbae2057db1222ae83))
* **admin:** Gutenberg Editor now loads basic CD styles ([e9839ec](https://github.com/UN-OCHA/common-design-wordpress/commit/e9839eca528e2f5f80e657de8c8687fcee3bb935))
* **admin:** allow more than one item per list in Gutenberg ([0ab5235](https://github.com/UN-OCHA/common-design-wordpress/commit/0ab5235767929252fdcfebc7f39301e826d2cc76)), closes [/wordpress.org/support/topic/unable-to-make-more-than-one-list-item-per-list/#post-16180353](https://github.com/UN-OCHA//wordpress.org/support/topic/unable-to-make-more-than-one-list-item-per-list//issues/post-16180353)
* **type:** adjust pullquote size/color ([fafdd62](https://github.com/UN-OCHA/common-design-wordpress/commit/fafdd62970f86d470f1f53a9f362433c66ab11b9))
* **theme:** another try at sticky footer in WP ([ba1da76](https://github.com/UN-OCHA/common-design-wordpress/commit/ba1da76a5b75d4ccca15292acc9f0b913c742c05))
* **theme:** apply bg-color to second sidebar ([6ee0434](https://github.com/UN-OCHA/common-design-wordpress/commit/6ee0434f6d9c757c145e9dbf7b4e22ace9760349))
* **theme:** avoid name clashes in WP style queue ([b8bb34e](https://github.com/UN-OCHA/common-design-wordpress/commit/b8bb34ef773ed273596aa33b5a450c75da421c2c))
* **theme:** CD footer menu ([0a1764d](https://github.com/UN-OCHA/common-design-wordpress/commit/0a1764dfa5e76f617344eeb1e8751e94a87c5a38))
* **theme:** CD Mandate cleanup ([693a2f5](https://github.com/UN-OCHA/common-design-wordpress/commit/693a2f57c4c10694918b6f10842ff1440cbae7e7))
* **theme:** CD Nav on desktop ([8644de4](https://github.com/UN-OCHA/common-design-wordpress/commit/8644de44a9bed02691dfd5efd889dc965aa5af49))
* **theme:** CD Nav on mobile ([5f92ec4](https://github.com/UN-OCHA/common-design-wordpress/commit/5f92ec4f0724a3f0496de88b689a4530b6875018))
* **theme:** Enqueue CD Core using WP instead of CSS imports ([62476c6](https://github.com/UN-OCHA/common-design-wordpress/commit/62476c607ed02729228956e456b6eb0deb165095))
* **theme:** HR.info -> RWR ([7461b9e](https://github.com/UN-OCHA/common-design-wordpress/commit/7461b9ea9231cee9e4f21e334fb5c94f56005a41))
* **theme:** match focus color on web.brand ([a2bf201](https://github.com/UN-OCHA/common-design-wordpress/commit/a2bf201ae034021b08c1f3dcfadeefebe4ae661f))
* **theme:** prevent search overflow on iPhone ([9426cdf](https://github.com/UN-OCHA/common-design-wordpress/commit/9426cdf9ff5957ef7a8485697fe0ab0664c468e7))
* **theme:** proper bgcolor while customizing theme ([2e71f35](https://github.com/UN-OCHA/common-design-wordpress/commit/2e71f35a890f30dd19fa5519507f79361a8e78e5))
* **theme:** provide default social URLs ([5a70e92](https://github.com/UN-OCHA/common-design-wordpress/commit/5a70e92d2d6d8ef98f8ac248076b3598da4352a1))
* **theme:** reconfigure sidebars to be compact by default ([cb8f6ae](https://github.com/UN-OCHA/common-design-wordpress/commit/cb8f6ae89b20af181b3bc9aa72a9eeb39439bc39))
* **theme:** remember to load Google Fonts ([d5fd794](https://github.com/UN-OCHA/common-design-wordpress/commit/d5fd794929c1a5b54fb4064b69af073715780ece))
* **theme:** remove duplicate <title> tag ([670d4b3](https://github.com/UN-OCHA/common-design-wordpress/commit/670d4b33b21490bfa47f7ebab10871e4a2d24836))
* **theme:** remove old bullet style ([6f13694](https://github.com/UN-OCHA/common-design-wordpress/commit/6f13694719938bc5dd2693c4252922d1913789b6))
* **theme:** remove straggler classes for compact sidebars ([f830fd5](https://github.com/UN-OCHA/common-design-wordpress/commit/f830fd51229f85114324c5607f6f05b4dcd6f64b))
* **theme:** restore boilerplate for mobile logo ([914bdda](https://github.com/UN-OCHA/common-design-wordpress/commit/914bdda2aa6f38668802d61f5b46b0e5d00aecc0))
* **theme:** restrict container padding to root container ([554553d](https://github.com/UN-OCHA/common-design-wordpress/commit/554553dbe45d5b4c7df764259145ea4b34262ab3))
* **theme:** tweaks to accomodate existing Support Demo sidebar content ([85d902d](https://github.com/UN-OCHA/common-design-wordpress/commit/85d902df7db01ac9745c90bea5c85eb846dd97f1))
* **theme:** typographic defaults for normal sidebar headings ([384e4b1](https://github.com/UN-OCHA/common-design-wordpress/commit/384e4b191ff5918aa577b9f829acaa22ae99a529))
* **theme:** update markup for CD Header search ([f471a35](https://github.com/UN-OCHA/common-design-wordpress/commit/f471a35112706515c8df79eb51cccb621001aef2))
* **theme:** upgrade social links in footer ([a7540b0](https://github.com/UN-OCHA/common-design-wordpress/commit/a7540b0b64e9c78e9334609c0cebd81d7d7e1830))
* **theme:** use more specific grid selector, and use --brand colors ([31c9490](https://github.com/UN-OCHA/common-design-wordpress/commit/31c949030be20ddd4bdfd48823da6b6fa977be0d))
* **theme:** WP overrides for sidebars ([5420933](https://github.com/UN-OCHA/common-design-wordpress/commit/54209330b564fbe1b7936a7301f9aba00f28d3f2))
* **theme:** WP sidebars look identical to Drupal now ([43c12b7](https://github.com/UN-OCHA/common-design-wordpress/commit/43c12b75a1b69494431fa24707b8cffa53623c3f))
* **theme:** bump CD to v8.0.1 ([acf40d2](https://github.com/UN-OCHA/common-design-wordpress/commit/acf40d2b4cab21eeed8beba2ad39a04290477b3f))
* **theme:** rename linting commands ([6a4062e](https://github.com/UN-OCHA/common-design-wordpress/commit/6a4062e5506e3ee084abbb0d4bc04f19a980a6d2))


## [2.0.0](https://github.com/UN-OCHA/common-design-wordpress/compare/v1.1.1...v2.0.0) (2022-08-01)


### ⚠ BREAKING CHANGES

* **security:** New minimum supported node.js versions: node.js 16.13.2 LTS and npm 8.1.2 which all development environments (local, pre-prod, prod) must support if they want to use the optional components in the theme, such as Sass compilation. None of them are required for the basic WP theme to function.

### Features

* add standard-version to common-design-wordpress ([bcd1190](https://github.com/UN-OCHA/common-design-wordpress/commit/bcd1190b80c4ee8b808183c7232f798f3fbc7cc9))
* upgrade to CD v7.2.1 ([a367d7e](https://github.com/UN-OCHA/common-design-wordpress/commit/a367d7e59ed52ac2ca0291dc690e02467497d7c6))


### Bug Fixes

* **security:** update minimum supported node.js version ([d5549d9](https://github.com/UN-OCHA/common-design-wordpress/commit/d5549d9ef1519f53b22349c829cf821e6809c9ca))
* upgrade all CD components to v7.2.1 ([3bb8e00](https://github.com/UN-OCHA/common-design-wordpress/commit/3bb8e00543b41d42e4c28e18bd846f79acd97faf))

# Changelog


## [v1.1.1](https://github.com/UN-OCHA/common-design-wordpress/releases/tag/v1.1.1) - 2021-08-25
### Fixed
- Provide template for Attachment to prevent infinite loop [CD-330](https://humanitarian.atlassian.net/browse/CD-330)

---

## [v1.1.0](https://github.com/UN-OCHA/common-design-wordpress/releases/tag/v1.1.0) - 2021-08-16
### Added
- Blockquote and pullquote Gutenberg blocks [CD-317](https://humanitarian.atlassian.net/browse/CD-317)
- Add instructions for the mobile logo to README [CD-324](https://humanitarian.atlassian.net/browse/CD-324)
### Fixed
- Vertical rhythm improvements [CD-316](https://humanitarian.atlassian.net/browse/CD-316)
- Image captions for Featured images [CD-318](https://humanitarian.atlassian.net/browse/CD-318)
- Banner image scaling [CD-320](https://humanitarian.atlassian.net/browse/CD-320)
### Changed
- Remove Related Platforms from OCHA Services menu by default. [CD-319](https://humanitarian.atlassian.net/browse/CD-319)
- Remove Social Media icons from footer by default. [CD-321](https://humanitarian.atlassian.net/browse/CD-321)
- Remove unused social Media menu definition [CD_323](https://humanitarian.atlassian.net/browse/CD-323)

---

## [v1.0.0](https://github.com/UN-OCHA/common-design-wordpress/releases/tag/v1.0.0) - 2021-08-05
### Added
- First version of Wordpress theme using the Common Design.
