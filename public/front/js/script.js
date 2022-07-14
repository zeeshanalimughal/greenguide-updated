// router.get('/delete-user/:userId', function (req, res) {
//     console.log("Hello")
//     if (!req.params.userId) {
//         return res.json({
//             status: "false",
//             message: "User id is required"
//         })
//     } else {

//         var user_id = req.params.userId;
//         User.find({ _id: user_id }, function (err, user) {
//             if (err) {
//                 res.json({
//                     status: "false",
//                     message: err.message
//                 })
//             } else {
//                 if (user.length > 0) {

//                     User.findOneAndDelete({ _id: user_id }, function (err, result) {
//                         if (err) {
//                             return res.json({
//                                 status: "false",
//                                 message: err.message
//                             })
//                         }
//                         else {
//                             return res.json({
//                                 status: "true",
//                                 message: "User deleted successfully"
//                             })
//                         }
//                     })
//                 } else {
//                     return res.json({
//                         status: "false",
//                         message: "User not found or already deleted"
//                     })
//                 }
//             }
//         })
//     }
// })