<?php
/**
 * Pinterest for WooCommerce CompleteOnboardingAfterFourteenDays class.
 *
 * @package Pinterest_For_WooCommerce/Classes/
 * @version x.x.x
 */

namespace Automattic\WooCommerce\Pinterest\Notes\Collection;

defined( 'ABSPATH' ) || exit;

/**
 * Class CompleteOnboardingAfterFourteenDays.
 *
 * Class responsible for admin Inbox notification after fourteen days from setup.
 *
 * @since x.x.x
 */
class CompleteOnboardingReminderAfterFourteenDays extends CompleteOnboardingReminderAfterSevenDays {

	const NOTE_NAME = 'pinterest-complete-onboarding-note-after-14-days';

	/**
	 * Get the number of days that a notification should be delayed.
	 *
	 * This method should be overridden by child classes if needed.
	 *
	 * @return int
	 */
	protected static function get_days_delay(): int {
		return 14;
	}
}
